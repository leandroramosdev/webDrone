<form class="form-horizontal">
  <fieldset>
    <legend>Identificação do Usuários</legend>
      
    <div class="form-group">
      <label for="inputNome" class="col-lg-2 control-label">Nome</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputNome" placeholder="Nome">
      </div>
    </div>
    Data de Nascimento:
      
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Senha</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Senha">
      </div>
    </div>
      
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Senha</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
      </div>
    </div>
      
    <div class="form-group">
      <label class="col-lg-2 control-label">Sexo</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="mas">
           Masculino
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="fem">
           Feminino
          </label>
        </div>
      </div>
    </div>
          
    <div id="date" class="form-group data-calendario">
		<div class="input-group date" id="datetimepicker">
			<input type="text" class="form-control" name="date_exit"></input>
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-calendar"></span>
			</span>
		</div>
	</div>
  </fieldset>
    
    <fieldset>
        <legend>Endereço do Usuário</legend>
          <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Logradouro</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" placeholder="Av., Rua,...">
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Número</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" placeholder="Número">
          </div>
        </div>
          <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Estado</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" placeholder="UF:">
              </div>
           </div>  
           
           <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Estado</label>
	      <div class="col-lg-10">
	        <select class="form-control" id="select">
				<option value="">Selecione</option>
				<option value="AC">Acre</option>
				<option value="AL">Alagoas</option>
				<option value="AP">Amapá</option>
				<option value="AM">Amazonas</option>
				<option value="BA">Bahia</option>
				<option value="CE">Ceará</option>
				<option value="DF">Distrito Federal</option>
				<option value="ES">Espirito Santo</option>
				<option value="GO">Goiás</option>
				<option value="MA">Maranhão</option>
				<option value="MS">Mato Grosso do Sul</option>
				<option value="MT">Mato Grosso</option>
				<option value="MG">Minas Gerais</option>
				<option value="PA">Pará</option>
				<option value="PB">Paraíba</option>
				<option value="PR">Paraná</option>
				<option value="PE">Pernambuco</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RN">Rio Grande do Norte</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina</option>
				<option value="SP">São Paulo</option>
				<option value="SE">Sergipe</option>
				<option value="TO">Tocantins</option>
	        </select>
	      </div>
	    </div>   
            
          <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Cidade</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" placeholder="Sua cidade">
              </div>
           </div>
    </fieldset>
      

    
     <fieldset>
        <legend> Mensagem do Usuário</legend>
          <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Grau de Urgência:</label>
              <div class="col-lg-10">
                <input class="bar" type="range" id="rangeinput" value="50"/>
              </div>
           </div> 
          
	      <div class="form-group">
		      <label for="textArea" class="col-lg-2 control-label">Mensagem</label>
		      <div class="col-lg-10">
		      <textarea class="form-control" rows="3" id="textArea"></textarea>
      	  </div>
    </fieldset>
    
    <fieldset>
           <legend> Quero um drone</legend>
           <div id="colorSelector"><div></div></div>
		   <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Cor</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" placeholder="cor">
              </div>
           </div> 
              <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Quantidade</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" placeholder="Quantidade">
              </div>
           </div> 
           
              <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label"> Preço Total: </label>
              <div class="col-lg-10">
                <input type="text" class="form-control" placeholder="R$:">
              </div>
           </div> 
    </fieldset>

      <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
    
    
    

</form>