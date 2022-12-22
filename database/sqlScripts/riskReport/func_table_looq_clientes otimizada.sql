SELECT DISTINCT 
 	u.name AS nome,
    u.cpf,
    ruls.score AS score,
    u.email,
    u.birthday AS data_nascimento,
    rup.cellphone AS celular,
    u.politically_exposed_person AS ppe,
    u.created_at AS data_cadastro,
    u.updated_at AS data_atualizacao,
    rd.rg,
    rd.issuing_body AS orgao_emissor,
    rd.issuing_state AS estado_emissao,
    rd.issuing_date AS data_emissao,
    u.gender AS sexo,
    upi.naturality AS naturalidade,
    upi.nacionality AS nacionalidade,
    upi.mother_name AS nome_mae,
    upi.father_name AS nome_pai,
    el.title AS escolaridade,
    u.profession AS profissao,
    pc.name AS classe_profissional,
    u.company_name AS empresa,
    u.gross_income AS renda_bruta,
    ms.title AS estado_civil,
    a.address AS logradouro,
    a.number AS numero,
    a.address_extra AS complemento,
    a.postal_code AS cep,
    a.city AS cidade,
    a.state AS estado,
    a.neighborhood AS bairro,
    pr.name AS nome_referencia_pessoal,
	rup.personal_reference_phone AS telefone_referencia_pessoal,
    ba.owner AS titular_conta,
    b.name AS banco,
    ba.agency_number AS agencia,
    ba.account_number AS numero_conta,
    c.id AS id_contrato,
    c.sign_date AS data_contratacao_emprestimo,
    rl.status AS status_emprestimo,
    rl.amount AS valor_emprestimo,
    rl.iof_value AS valor_iof,
    rl.amount_financed AS valor_total_financiado,
    rl.amount_debt AS valor_total_divida,
    rl.num_installments AS quantidade_parcelas,
    rl.quantity_installments_paid AS quantidade_parcelas_pagas,
    rl.quantity_installments_pending AS quantidade_parcelas_a_pagar,
    rl.amount_paid AS total_pago_ate_momento,
    rl.installment_value AS valor_parcelas,
    rl.expiration_date_next_installment AS data_vencimento_proxima_parcela,
    rl.installment_arrears AS parcela_paga_em_atraso,
    rl.interest_accumulated AS juros_acumulado,
    rl.discharge_percent AS porcentagem_quitacao,
    rl.current_debt AS valor_atual_divida,
    rl.monthly_effective_cost AS juros_mes,
    rl.annual_effective_cost AS juros_ano,
    rl.monthly_cet_rate AS cet_mes,
    rl.cet_rate AS cet_ano
   FROM users u
     LEFT JOIN rep_user_last_scores ruls ON u.id = ruls.user_id
	 LEFT JOIN rep_user_phones rup ON u.id = rup.user_id
     LEFT JOIN marital_statuses ms ON u.marital_status_id = ms.id
     LEFT JOIN rg_documents rd ON u.id = rd.user_id
     LEFT JOIN user_personal_infos upi ON u.id = upi.user_id
     LEFT JOIN education_levels el ON upi.education_level_id = el.id
     LEFT JOIN addresses a ON u.address_id = a.id
     LEFT JOIN professional_classes pc ON u.professional_class_id = pc.id
     LEFT JOIN personal_references pr ON u.personal_reference_id = pr.id
     LEFT JOIN user_bank_accounts uba ON u.id = uba.user_id
     LEFT JOIN bank_accounts ba ON uba.bank_account_id = ba.id
     LEFT JOIN banks b ON b.id = ba.bank_id
     LEFT JOIN rep_loans rl ON u.id = rl.user_id
     LEFT JOIN contracts c ON c.id = rl.contract_id
	WHERE u.id > 1
	ORDER BY u.created_at DESC