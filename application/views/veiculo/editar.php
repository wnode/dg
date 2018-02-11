<?php echo form_open('veiculo/editar/'.$veiculo['veic_id'],array("class"=>"form-horizontal")); ?>

	<div class="row">
                <div class="col-md-12">
                    
                        <!-- /.panel-heading -->
						<div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs margin-msg">
								<li class="active"><a href="#dados_gerais" data-toggle="tab">Dados Gerais</a>
                                </li>
                                <li><a href="#dados_veiculo" data-toggle="tab">Veículo</a>
                                </li>
                                <li><a href="#registro_anterior" data-toggle="tab">Registro Anterior</a>
                                </li>
                                <li><a href="#nota_fiscal" data-toggle="tab">Nota Fiscal</a>
                                </li>
                                <li><a href="#adicionais" data-toggle="tab">Adicionais</a>
                                </li>
								<li><a href="#condutor" data-toggle="tab">Condutor</a>
                                </li>
								<li><a href="#obs_livre" data-toggle="tab">Obs. Livre</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
								
								<div class="tab-pane fade in active" id="dados_gerais">

<div class="form-group">
		<label for="veic_codigo" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="veic_codigo" value="<?php echo ($this->input->post('veic_codigo') ? $this->input->post('veic_codigo') : $veiculo['veic_codigo']); ?>" class="form-control" id="veic_codigo" />
			<?php echo form_error('veic_codigo'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_placa_uf" class="col-md-4 control-label">Placa/UF</label>
		<div class="col-md-8">
			<input type="text" name="veic_placa_uf" value="<?php echo ($this->input->post('veic_placa_uf') ? $this->input->post('veic_placa_uf') : $veiculo['veic_placa_uf']); ?>" class="form-control" id="veic_placa_uf" />
			<?php echo form_error('veic_placa_uf'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_final_placa" class="col-md-4 control-label">Final da Placa</label>
		<div class="col-md-8">
			<input type="text" name="veic_final_placa" value="<?php echo ($this->input->post('veic_final_placa') ? $this->input->post('veic_final_placa') : $veiculo['veic_final_placa']); ?>" class="form-control" id="veic_final_placa" />
			<?php echo form_error('veic_final_placa'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_marca_modelo" class="col-md-4 control-label">Marca/Modelo</label>
		<div class="col-md-8">
			<input type="text" name="veic_marca_modelo" value="<?php echo ($this->input->post('veic_marca_modelo') ? $this->input->post('veic_marca_modelo') : $veiculo['veic_marca_modelo']); ?>" class="form-control" id="veic_marca_modelo" />
			<?php echo form_error('veic_marca_modelo'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_chassi" class="col-md-4 control-label">Chassi</label>
		<div class="col-md-8">
			<input type="text" name="veic_chassi" value="<?php echo ($this->input->post('veic_chassi') ? $this->input->post('veic_chassi') : $veiculo['veic_chassi']); ?>" class="form-control" id="veic_chassi" />
			<?php echo form_error('veic_chassi'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_renavam" class="col-md-4 control-label">Renavam</label>
		<div class="col-md-8">
			<input type="text" name="veic_renavam" value="<?php echo ($this->input->post('veic_renavam') ? $this->input->post('veic_renavam') : $veiculo['veic_renavam']); ?>" class="form-control" id="veic_renavam" />
			<?php echo form_error('veic_renavam'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_cpf_cnpj_prop" class="col-md-4 control-label">CPF/CNPJ Proprietário</label>
		<div class="col-md-8">
			<input type="text" name="veic_cpf_cnpj_prop" value="<?php echo ($this->input->post('veic_cpf_cnpj_prop') ? $this->input->post('veic_cpf_cnpj_prop') : $veiculo['veic_cpf_cnpj_prop']); ?>" class="form-control" id="veic_cpf_cnpj_prop" />
			<?php echo form_error('veic_cpf_cnpj_prop'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_procedencia" class="col-md-4 control-label">Procedencia</label>
		<div class="col-md-8">
			<input type="text" name="veic_procedencia" value="<?php echo ($this->input->post('veic_procedencia') ? $this->input->post('veic_procedencia') : $veiculo['veic_procedencia']); ?>" class="form-control" id="veic_procedencia" />
			<?php echo form_error('veic_procedencia'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_data_cad" class="col-md-4 control-label">Data Cadastro</label>
		<div class="col-md-8">
			<input type="text" name="veic_data_cad" value="<?php echo ($this->input->post('veic_data_cad') ? $this->input->post('veic_data_cad') : $veiculo['veic_data_cad']); ?>" class="form-control" id="veic_data_cad" />
			<?php echo form_error('veic_data_cad'); ?>
		</div>
	</div>
								</div>
							
                                <div class="tab-pane" id="dados_veiculo">

	
	<div class="form-group">
		<label for="veic_remarcado" class="col-md-4 control-label">Remarcado</label>
		<div class="col-md-8">
			<input type="text" name="veic_remarcado" value="<?php echo ($this->input->post('veic_remarcado') ? $this->input->post('veic_remarcado') : $veiculo['veic_remarcado']); ?>" class="form-control" id="veic_remarcado" />
			<?php echo form_error('veic_remarcado'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_alongado" class="col-md-4 control-label">Alongado</label>
		<div class="col-md-8">
			<input type="text" name="veic_alongado" value="<?php echo ($this->input->post('veic_alongado') ? $this->input->post('veic_alongado') : $veiculo['veic_alongado']); ?>" class="form-control" id="veic_alongado" />
			<?php echo form_error('veic_alongado'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_fabricacao" class="col-md-4 control-label">Fabricação</label>
		<div class="col-md-8">
			<input type="text" name="veic_fabricacao" value="<?php echo ($this->input->post('veic_fabricacao') ? $this->input->post('veic_fabricacao') : $veiculo['veic_fabricacao']); ?>" class="form-control" id="veic_fabricacao" />
			<?php echo form_error('veic_fabricacao'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_categoria" class="col-md-4 control-label">Categoria</label>
		<div class="col-md-8">
			<input type="text" name="veic_categoria" value="<?php echo ($this->input->post('veic_categoria') ? $this->input->post('veic_categoria') : $veiculo['veic_categoria']); ?>" class="form-control" id="veic_categoria" />
			<?php echo form_error('veic_categoria'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_data_aquis" class="col-md-4 control-label">Data Aquisição</label>
		<div class="col-md-8">
			<input type="text" name="veic_data_aquis" value="<?php echo ($this->input->post('veic_data_aquis') ? $this->input->post('veic_data_aquis') : $veiculo['veic_data_aquis']); ?>" class="form-control" id="veic_data_aquis" />
			<?php echo form_error('veic_data_aquis'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_tipo" class="col-md-4 control-label">Tipo</label>
		<div class="col-md-8">
			<input type="text" name="veic_tipo" value="<?php echo ($this->input->post('veic_tipo') ? $this->input->post('veic_tipo') : $veiculo['veic_tipo']); ?>" class="form-control" id="veic_tipo" />
			<?php echo form_error('veic_tipo'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_cor" class="col-md-4 control-label">Cor</label>
		<div class="col-md-8">
			<input type="text" name="veic_cor" value="<?php echo ($this->input->post('veic_cor') ? $this->input->post('veic_cor') : $veiculo['veic_cor']); ?>" class="form-control" id="veic_cor" />
			<?php echo form_error('veic_cor'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_ano_fabric" class="col-md-4 control-label">Ano Fabricação</label>
		<div class="col-md-8">
			<input type="text" name="veic_ano_fabric" value="<?php echo ($this->input->post('veic_ano_fabric') ? $this->input->post('veic_ano_fabric') : $veiculo['veic_ano_fabric']); ?>" class="form-control" id="veic_ano_fabric" />
			<?php echo form_error('veic_ano_fabric'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_ano_mod" class="col-md-4 control-label">Ano Modelo</label>
		<div class="col-md-8">
			<input type="text" name="veic_ano_mod" value="<?php echo ($this->input->post('veic_ano_mod') ? $this->input->post('veic_ano_mod') : $veiculo['veic_ano_mod']); ?>" class="form-control" id="veic_ano_mod" />
			<?php echo form_error('veic_ano_mod'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_lugares" class="col-md-4 control-label">Lugares</label>
		<div class="col-md-8">
			<input type="text" name="veic_lugares" value="<?php echo ($this->input->post('veic_lugares') ? $this->input->post('veic_lugares') : $veiculo['veic_lugares']); ?>" class="form-control" id="veic_lugares" />
			<?php echo form_error('veic_lugares'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_especie" class="col-md-4 control-label">Especie</label>
		<div class="col-md-8">
			<input type="text" name="veic_especie" value="<?php echo ($this->input->post('veic_especie') ? $this->input->post('veic_especie') : $veiculo['veic_especie']); ?>" class="form-control" id="veic_especie" />
			<?php echo form_error('veic_especie'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_combustivel" class="col-md-4 control-label">Combustível</label>
		<div class="col-md-8">
			<input type="text" name="veic_combustivel" value="<?php echo ($this->input->post('veic_combustivel') ? $this->input->post('veic_combustivel') : $veiculo['veic_combustivel']); ?>" class="form-control" id="veic_combustivel" />
			<?php echo form_error('veic_combustivel'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_potencia" class="col-md-4 control-label">Potência</label>
		<div class="col-md-8">
			<input type="text" name="veic_potencia" value="<?php echo ($this->input->post('veic_potencia') ? $this->input->post('veic_potencia') : $veiculo['veic_potencia']); ?>" class="form-control" id="veic_potencia" />
			<?php echo form_error('veic_potencia'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_cmt" class="col-md-4 control-label">CMT</label>
		<div class="col-md-8">
			<input type="text" name="veic_cmt" value="<?php echo ($this->input->post('veic_cmt') ? $this->input->post('veic_cmt') : $veiculo['veic_cmt']); ?>" class="form-control" id="veic_cmt" />
			<?php echo form_error('veic_cmt'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_cilindrada" class="col-md-4 control-label">Cilindrada</label>
		<div class="col-md-8">
			<input type="text" name="veic_cilindrada" value="<?php echo ($this->input->post('veic_cilindrada') ? $this->input->post('veic_cilindrada') : $veiculo['veic_cilindrada']); ?>" class="form-control" id="veic_cilindrada" />
			<?php echo form_error('veic_cilindrada'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_carga" class="col-md-4 control-label">Carga</label>
		<div class="col-md-8">
			<input type="text" name="veic_carga" value="<?php echo ($this->input->post('veic_carga') ? $this->input->post('veic_carga') : $veiculo['veic_carga']); ?>" class="form-control" id="veic_carga" />
			<?php echo form_error('veic_carga'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_rtb" class="col-md-4 control-label">RTB</label>
		<div class="col-md-8">
			<input type="text" name="veic_rtb" value="<?php echo ($this->input->post('veic_rtb') ? $this->input->post('veic_rtb') : $veiculo['veic_rtb']); ?>" class="form-control" id="veic_rtb" />
			<?php echo form_error('veic_rtb'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_num_eixos" class="col-md-4 control-label">Número de Eixos</label>
		<div class="col-md-8">
			<input type="text" name="veic_num_eixos" value="<?php echo ($this->input->post('veic_num_eixos') ? $this->input->post('veic_num_eixos') : $veiculo['veic_num_eixos']); ?>" class="form-control" id="veic_num_eixos" />
			<?php echo form_error('veic_num_eixos'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_pbt" class="col-md-4 control-label">PBT</label>
		<div class="col-md-8">
			<input type="text" name="veic_pbt" value="<?php echo ($this->input->post('veic_pbt') ? $this->input->post('veic_pbt') : $veiculo['veic_pbt']); ?>" class="form-control" id="veic_pbt" />
			<?php echo form_error('veic_pbt'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_num_carroc" class="col-md-4 control-label">Número Carroceria</label>
		<div class="col-md-8">
			<input type="text" name="veic_num_carroc" value="<?php echo ($this->input->post('veic_num_carroc') ? $this->input->post('veic_num_carroc') : $veiculo['veic_num_carroc']); ?>" class="form-control" id="veic_num_carroc" />
			<?php echo form_error('veic_num_carroc'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_tipo_carroc" class="col-md-4 control-label">Tipo Carroceria</label>
		<div class="col-md-8">
			<input type="text" name="veic_tipo_carroc" value="<?php echo ($this->input->post('veic_tipo_carroc') ? $this->input->post('veic_tipo_carroc') : $veiculo['veic_tipo_carroc']); ?>" class="form-control" id="veic_tipo_carroc" />
			<?php echo form_error('veic_tipo_carroc'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_num_motor" class="col-md-4 control-label">Número Motor</label>
		<div class="col-md-8">
			<input type="text" name="veic_num_motor" value="<?php echo ($this->input->post('veic_num_motor') ? $this->input->post('veic_num_motor') : $veiculo['veic_num_motor']); ?>" class="form-control" id="veic_num_motor" />
			<?php echo form_error('veic_num_motor'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_km" class="col-md-4 control-label">KM</label>
		<div class="col-md-8">
			<input type="text" name="veic_km" value="<?php echo ($this->input->post('veic_km') ? $this->input->post('veic_km') : $veiculo['veic_km']); ?>" class="form-control" id="veic_km" />
			<?php echo form_error('veic_km'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_arrend_merc" class="col-md-4 control-label">Arrendamento Mercantil</label>
		<div class="col-md-8">
			<input type="text" name="veic_arrend_merc" value="<?php echo ($this->input->post('veic_arrend_merc') ? $this->input->post('veic_arrend_merc') : $veiculo['veic_arrend_merc']); ?>" class="form-control" id="veic_arrend_merc" />
			<?php echo form_error('veic_arrend_merc'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_restricao" class="col-md-4 control-label">Restrição</label>
		<div class="col-md-8">
			<input type="text" name="veic_restricao" value="<?php echo ($this->input->post('veic_restricao') ? $this->input->post('veic_restricao') : $veiculo['veic_restricao']); ?>" class="form-control" id="veic_restricao" />
			<?php echo form_error('veic_restricao'); ?>
		</div>
	</div>
	</div>
	
	<div class="tab-pane fade" id="registro_anterior">
	<div class="form-group">
		<label for="veic_prop_ant" class="col-md-4 control-label">Proprietário Anterior</label>
		<div class="col-md-8">
			<input type="text" name="veic_prop_ant" value="<?php echo ($this->input->post('veic_prop_ant') ? $this->input->post('veic_prop_ant') : $veiculo['veic_prop_ant']); ?>" class="form-control" id="veic_prop_ant" />
			<?php echo form_error('veic_prop_ant'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_cpf_cnpj" class="col-md-4 control-label">CPF/CNPJ</label>
		<div class="col-md-8">
			<input type="text" name="veic_cpf_cnpj" value="<?php echo ($this->input->post('veic_cpf_cnpj') ? $this->input->post('veic_cpf_cnpj') : $veiculo['veic_cpf_cnpj']); ?>" class="form-control" id="veic_cpf_cnpj" />
			<?php echo form_error('veic_cpf_cnpj'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_placa_uf_ant" class="col-md-4 control-label">Placa/UF Anterior</label>
		<div class="col-md-8">
			<input type="text" name="veic_placa_uf_ant" value="<?php echo ($this->input->post('veic_placa_uf_ant') ? $this->input->post('veic_placa_uf_ant') : $veiculo['veic_placa_uf_ant']); ?>" class="form-control" id="veic_placa_uf_ant" />
			<?php echo form_error('veic_placa_uf_ant'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_crv_ant" class="col-md-4 control-label">CRV Anterior</label>
		<div class="col-md-8">
			<input type="text" name="veic_crv_ant" value="<?php echo ($this->input->post('veic_crv_ant') ? $this->input->post('veic_crv_ant') : $veiculo['veic_crv_ant']); ?>" class="form-control" id="veic_crv_ant" />
			<?php echo form_error('veic_crv_ant'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_cod_munic" class="col-md-4 control-label">Código Município</label>
		<div class="col-md-8">
			<input type="text" name="veic_cod_munic" value="<?php echo ($this->input->post('veic_cod_munic') ? $this->input->post('veic_cod_munic') : $veiculo['veic_cod_munic']); ?>" class="form-control" id="veic_cod_munic" />
			<?php echo form_error('veic_cod_munic'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_munic" class="col-md-4 control-label">Município</label>
		<div class="col-md-8">
			<input type="text" name="veic_munic" value="<?php echo ($this->input->post('veic_munic') ? $this->input->post('veic_munic') : $veiculo['veic_munic']); ?>" class="form-control" id="veic_munic" />
			<?php echo form_error('veic_munic'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_uf" class="col-md-4 control-label">UF</label>
		<div class="col-md-8">
			<input type="text" name="veic_uf" value="<?php echo ($this->input->post('veic_uf') ? $this->input->post('veic_uf') : $veiculo['veic_uf']); ?>" class="form-control" id="veic_uf" />
			<?php echo form_error('veic_uf'); ?>
		</div>
	</div>
	</div>
	
	<div class="tab-pane fade" id="nota_fiscal">
	<div class="form-group">
		<label for="veic_nota_cnpj" class="col-md-4 control-label">CNPJ</label>
		<div class="col-md-8">
			<input type="text" name="veic_nota_cnpj" value="<?php echo ($this->input->post('veic_nota_cnpj') ? $this->input->post('veic_nota_cnpj') : $veiculo['veic_nota_cnpj']); ?>" class="form-control" id="veic_nota_cnpj" />
			<?php echo form_error('veic_nota_cnpj'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_nota_uf" class="col-md-4 control-label">UF</label>
		<div class="col-md-8">
			<input type="text" name="veic_nota_uf" value="<?php echo ($this->input->post('veic_nota_uf') ? $this->input->post('veic_nota_uf') : $veiculo['veic_nota_uf']); ?>" class="form-control" id="veic_nota_uf" />
			<?php echo form_error('veic_nota_uf'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_nota_numero_nota" class="col-md-4 control-label">Número da Nota Fiscal</label>
		<div class="col-md-8">
			<input type="text" name="veic_nota_numero_nota" value="<?php echo ($this->input->post('veic_nota_numero_nota') ? $this->input->post('veic_nota_numero_nota') : $veiculo['veic_nota_numero_nota']); ?>" class="form-control" id="veic_nota_numero_nota" />
			<?php echo form_error('veic_nota_numero_nota'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_nota_envelope" class="col-md-4 control-label">Envelope</label>
		<div class="col-md-8">
			<input type="text" name="veic_nota_envelope" value="<?php echo ($this->input->post('veic_nota_envelope') ? $this->input->post('veic_nota_envelope') : $veiculo['veic_nota_envelope']); ?>" class="form-control" id="veic_nota_envelope" />
			<?php echo form_error('veic_nota_envelope'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_nota_serie" class="col-md-4 control-label">Série</label>
		<div class="col-md-8">
			<input type="text" name="veic_nota_serie" value="<?php echo ($this->input->post('veic_nota_serie') ? $this->input->post('veic_nota_serie') : $veiculo['veic_nota_serie']); ?>" class="form-control" id="veic_nota_serie" />
			<?php echo form_error('veic_nota_serie'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_nota_crv" class="col-md-4 control-label">CRV</label>
		<div class="col-md-8">
			<input type="text" name="veic_nota_crv" value="<?php echo ($this->input->post('veic_nota_crv') ? $this->input->post('veic_nota_crv') : $veiculo['veic_nota_crv']); ?>" class="form-control" id="veic_nota_crv" />
			<?php echo form_error('veic_nota_crv'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_nota_urt" class="col-md-4 control-label">URT</label>
		<div class="col-md-8">
			<input type="text" name="veic_nota_urt" value="<?php echo ($this->input->post('veic_nota_urt') ? $this->input->post('veic_nota_urt') : $veiculo['veic_nota_urt']); ?>" class="form-control" id="veic_nota_urt" />
			<?php echo form_error('veic_nota_urt'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_nota_insc_estadual" class="col-md-4 control-label">Inscrição Estadual</label>
		<div class="col-md-8">
			<input type="text" name="veic_nota_insc_estadual" value="<?php echo ($this->input->post('veic_nota_insc_estadual') ? $this->input->post('veic_nota_insc_estadual') : $veiculo['veic_nota_insc_estadual']); ?>" class="form-control" id="veic_nota_insc_estadual" />
			<?php echo form_error('veic_nota_insc_estadual'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_nota_data" class="col-md-4 control-label">Data</label>
		<div class="col-md-8">
			<input type="text" name="veic_nota_data" value="<?php echo ($this->input->post('veic_nota_data') ? $this->input->post('veic_nota_data') : $veiculo['veic_nota_data']); ?>" class="form-control" id="veic_nota_data" />
			<?php echo form_error('veic_nota_data'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_nota_valor" class="col-md-4 control-label">Valor</label>
		<div class="col-md-8">
			<input type="text" name="veic_nota_valor" value="<?php echo ($this->input->post('veic_nota_valor') ? $this->input->post('veic_nota_valor') : $veiculo['veic_nota_valor']); ?>" class="form-control" id="veic_nota_valor" />
			<?php echo form_error('veic_nota_valor'); ?>
		</div>
	</div>
	</div>
	
	<div class="tab-pane fade" id="adicionais">
	<div class="form-group">
		<label for="veic_adicionais_obs_resumida" class="col-md-4 control-label">Observação Resumida</label>
		<div class="col-md-8">
			<textarea name="veic_adicionais_obs_resumida" class="form-control"><?php echo ($this->input->post('veic_adicionais_obs_resumida') ? $this->input->post('veic_adicionais_obs_resumida') : $veiculo['veic_adicionais_obs_resumida']); ?></textarea>
			<?php echo form_error('veic_adicionais_obs_resumida'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_adicionais_exigencia" class="col-md-4 control-label">Exigência</label>
		<div class="col-md-8">
			<textarea name="veic_adicionais_exigencia" class="form-control"><?php echo ($this->input->post('veic_adicionais_exigencia') ? $this->input->post('veic_adicionais_exigencia') : $veiculo['veic_adicionais_exigencia']); ?></textarea>
			<?php echo form_error('veic_adicionais_exigencia'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_adicionais_acessorios_adicionais" class="col-md-4 control-label">Acessórios Adicionais</label>
		<div class="col-md-8">
			<textarea name="veic_adicionais_acessorios_adicionais" class="form-control"><?php echo ($this->input->post('veic_adicionais_acessorios_adicionais') ? $this->input->post('veic_adicionais_acessorios_adicionais') : $veiculo['veic_adicionais_acessorios_adicionais']); ?></textarea>
			<?php echo form_error('veic_adicionais_acessorios_adicionais'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_adicionais_nome_usuario" class="col-md-4 control-label">Nome de Usuário</label>
		<div class="col-md-8">
			<input type="text" name="veic_adicionais_nome_usuario" value="<?php echo ($this->input->post('veic_adicionais_nome_usuario') ? $this->input->post('veic_adicionais_nome_usuario') : $veiculo['veic_adicionais_nome_usuario']); ?>" class="form-control" id="veic_adicionais_nome_usuario" />
			<?php echo form_error('veic_adicionais_nome_usuario'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_adicionais_email" class="col-md-4 control-label">E-mail</label>
		<div class="col-md-8">
			<input type="text" name="veic_adicionais_email" value="<?php echo ($this->input->post('veic_adicionais_email') ? $this->input->post('veic_adicionais_email') : $veiculo['veic_adicionais_email']); ?>" class="form-control" id="veic_adicionais_email" />
			<?php echo form_error('veic_adicionais_email'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_adicionais_ddd" class="col-md-4 control-label">DDD</label>
		<div class="col-md-8">
			<input type="text" name="veic_adicionais_ddd" value="<?php echo ($this->input->post('veic_adicionais_ddd') ? $this->input->post('veic_adicionais_ddd') : $veiculo['veic_adicionais_ddd']); ?>" class="form-control" id="veic_adicionais_ddd" />
			<?php echo form_error('veic_adicionais_ddd'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_adicionais_usuario_telefone" class="col-md-4 control-label">Telefone Usuário</label>
		<div class="col-md-8">
			<input type="text" name="veic_adicionais_usuario_telefone" value="<?php echo ($this->input->post('veic_adicionais_usuario_telefone') ? $this->input->post('veic_adicionais_usuario_telefone') : $veiculo['veic_adicionais_usuario_telefone']); ?>" class="form-control" id="veic_adicionais_usuario_telefone" />
			<?php echo form_error('veic_adicionais_usuario_telefone'); ?>
		</div>
	</div>
	</div>
	
	<div class="tab-pane fade" id="condutor">
	<div class="form-group">
		<label for="veic_condutor_nome_condutor" class="col-md-4 control-label">Nome Condutor</label>
		<div class="col-md-8">
			<input type="text" name="veic_condutor_nome_condutor" value="<?php echo ($this->input->post('veic_condutor_nome_condutor') ? $this->input->post('veic_condutor_nome_condutor') : $veiculo['veic_condutor_nome_condutor']); ?>" class="form-control" id="veic_condutor_nome_condutor" />
			<?php echo form_error('veic_condutor_nome_condutor'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_condutor_tel_1" class="col-md-4 control-label">Telefone 1</label>
		<div class="col-md-8">
			<input type="text" name="veic_condutor_tel_1" value="<?php echo ($this->input->post('veic_condutor_tel_1') ? $this->input->post('veic_condutor_tel_1') : $veiculo['veic_condutor_tel_1']); ?>" class="form-control" id="veic_condutor_tel_1" />
			<?php echo form_error('veic_condutor_tel_1'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_condutor_tel_2" class="col-md-4 control-label">Telefone 2</label>
		<div class="col-md-8">
			<input type="text" name="veic_condutor_tel_2" value="<?php echo ($this->input->post('veic_condutor_tel_2') ? $this->input->post('veic_condutor_tel_2') : $veiculo['veic_condutor_tel_2']); ?>" class="form-control" id="veic_condutor_tel_2" />
			<?php echo form_error('veic_condutor_tel_2'); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="veic_condutor_email" class="col-md-4 control-label">E-mail</label>
		<div class="col-md-8">
			<input type="text" name="veic_condutor_email" value="<?php echo ($this->input->post('veic_condutor_email') ? $this->input->post('veic_condutor_email') : $veiculo['veic_condutor_email']); ?>" class="form-control" id="veic_condutor_email" />
			<?php echo form_error('veic_condutor_email'); ?>
		</div>
	</div>
	</div>
	
	<div class="tab-pane fade" id="obs_livre">
	<div class="form-group">
		<label for="veic_obs_livre" class="col-md-4 control-label">Observação Livre</label>
		<div class="col-md-8">
			<textarea name="veic_obs_livre" class="form-control"><?php echo ($this->input->post('veic_obs_livre') ? $this->input->post('veic_obs_livre') : $veiculo['veic_obs_livre']); ?></textarea>
			<?php echo form_error('veic_obs_livre'); ?>
		</div>
	</div>
	</div>
	
	</div>
                        </div>
                        <!-- /.panel-body -->
                    
                    <!-- /.panel -->
                </div>
			</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Atualizar</button>
        </div>
	</div>
	
<?php echo form_close(); ?>