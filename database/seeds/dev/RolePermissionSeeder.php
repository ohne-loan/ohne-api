<?php

namespace Database\Seeds\Dev;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		/**
		 * Create roles
		 */
		$admin = Role::create([
		    'name' => 'Admin',
            'admin' => 1
        ]);

		$client = Role::create([
		    'name' => 'Cliente',
            'admin' => 0
        ]);

		/**
		 * Permissions to User model
		 */
		Permission::create([
			'name' => 'create_users',
			'guard_name' => 'api',
            'entity' => 'Usuário',
            'description' => 'Criar um novo usuário.'
		]);

		Permission::create([
			'name' => 'edit_users',
			'guard_name' => 'api',
            'entity' => 'Usuário',
            'description' => 'Editar usuários.'
		]);

		Permission::create([
			'name' => 'destroy_users',
			'guard_name' => 'api',
            'entity' => 'Usuário',
            'description' => 'Excluir usuários.'
		]);

		Permission::create([
			'name' => 'view_users',
			'guard_name' => 'api',
            'entity' => 'Usuário',
            'description' => 'Visualizar usuários.'
		]);

		Permission::create([
			'name' => 'change_password_user',
			'guard_name' => 'api',
            'entity' => 'Usuário',
            'description' => 'Editar senha de usuário.'
		]);

		/**
		 * Permissions to Permission model
		 */

		Permission::create([
			'name' => 'view_permissions',
			'guard_name' => 'api',
            'entity' => 'Permissões',
            'description' => 'Visualizar permissões.'
		]);

		/**
		 * Permissions to Role model
		 */
		Permission::create([
			'name' => 'create_roles',
			'guard_name' => 'api',
            'entity' => 'Perfis',
            'description' => 'Criar um novo perfil.'
		]);

		Permission::create([
			'name' => 'edit_roles',
			'guard_name' => 'api',
            'entity' => 'Perfis',
            'description' => 'Editar um perfil.'
		]);

		Permission::create([
			'name' => 'destroy_roles',
			'guard_name' => 'api',
            'entity' => 'Perfis',
            'description' => 'Excluir um perfil.'
		]);

		Permission::create([
			'name' => 'view_roles',
			'guard_name' => 'api',
            'entity' => 'Perfis',
            'description' => 'Visualizar perfis.'
		]);

        Permission::create([
            'name' => 'view_pending_loans',
            'guard_name' => 'api',
            'entity' => 'Empréstimos',
            'description' => 'Visualizar empréstimos pendentes.'
        ]);


        Permission::create([
            'name' => 'view_sorocred-pending_loans',
            'guard_name' => 'api',
            'entity' => 'Empréstimos',
            'description' => 'Visualizar empréstimos pendentes Sorocred.'
        ]);

        Permission::create([
            'name' => 'view_wait-sign_loans',
            'guard_name' => 'api',
            'entity' => 'Empréstimos',
            'description' => 'Visualizar empréstimos aguardando assinatura.'
        ]);

        Permission::create([
            'name' => 'view_progress_loans',
            'guard_name' => 'api',
            'entity' => 'Empréstimos',
            'description' => 'Visualizar empréstimos em progresso.'
        ]);

        Permission::create([
            'name' => 'view_rejected_loans',
            'guard_name' => 'api',
            'entity' => 'Empréstimos',
            'description' => 'Visualizar empréstimos recusados.'
        ]);

        Permission::create([
            'name' => 'view_finished_loans',
            'guard_name' => 'api',
            'entity' => 'Empréstimos',
            'description' => 'Visualizar empréstimos finalizados.'
        ]);

        Permission::create([
            'name' => 'edit_loans',
            'guard_name' => 'api',
            'entity' => 'Empréstimos',
            'description' => 'Editar um empréstimo.'
        ]);

        Permission::create([
            'name' => 'review_loans',
            'guard_name' => 'api',
            'entity' => 'Empréstimos',
            'description' => 'Aprovar ou Reprovar empréstimos.'
        ]);

        Permission::create([
            'name' => 'edit_rates',
            'guard_name' => 'api',
            'entity' => 'Taxas de Juros',
            'description' => 'Editar taxas de juros.'
        ]);

        Permission::create([
            'name' => 'view_logs',
            'guard_name' => 'api',
            'entity' => 'Logs',
            'description' => 'Visualizar tela de logs do sistema.'
        ]);

        Permission::create([
            'name' => 'view_score',
            'guard_name' => 'api',
            'entity' => 'Score',
            'description' => 'Visualizar score dos clientes.'
        ]);


        /**
		 * Set permissions to Role
		 */

		$admin->givePermissionTo(Permission::all());

//		$client->givePermissionTo();

//		$aluno->givePermissionTo([
//			'view_users',
//			'view_roles',
//			'view_permissions'
//		]);

//		$financeiro->givePermissionTo([
//			'view_users',
//			'view_roles',
//			'view_permissions'
//		]);
    }
}
