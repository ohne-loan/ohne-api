<?php


namespace App\Services;


use App\Models\Transfer;
use App\Models\TransferModifier;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class TransferService
{
	public function all(): LengthAwarePaginator
	{
		return Transfer::eager()
			->paginate();
	}

	public function find(int $id): Transfer
	{
		return Transfer::eager()
			->findOrFail($id);
	}

	/**
	 * @param Transfer $transfer
	 * @param array $modifiers
	 * @throws \Exception
	 */
	public function store(Transfer $transfer, array $modifiers)
	{
		DB::beginTransaction();

		try {
			if ( $transfer->exists ) {
				$transfer->modifiers()->delete();
			}

			$transfer->save();

			$this->saveModifiers($transfer, $modifiers);

			DB::commit();
		} catch (\Exception $e) {
			DB::rollBack();
			throw $e;
		}
	}

	private function saveModifiers(Transfer $transfer, $modifiers)
	{
		foreach ($modifiers as $info) {
			$modifier = new TransferModifier();
			$modifier->value = $info['value'];
			$modifier->description = $info['description'];
			$modifier->transfer_id = $transfer->id;
			$modifier->save();
		}
	}

	/**
	 * @param Transfer $transfer
	 * @throws \Exception
	 */
	public function delete(Transfer $transfer)
	{
		$transfer->modifiers()->delete();
		$transfer->delete();
	}
}