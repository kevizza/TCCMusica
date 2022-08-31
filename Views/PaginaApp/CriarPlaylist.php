    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="Registro.php" method="POST">
					<span class="login100-form-title p-b-26">
						REGISTRO
					</span>
					<div class="wrap-input100 validate-input" data-validate="Campo Obrigatorio">
						<input class="input100" type="text" name="username" id="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Campo Obrigatorio">
						<input class="input100" type="text" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Insira a senha">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="senha" id="senha" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Confirme a senha">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="senha" id="senha" placeholder="Confirmar Senha">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Campo Obrigatorio">
						<span class="btn-show-pass">
						</span>
						<input class="input100" type="date" name="date" id="date" placeholder="Data Nascimento">
						<span class="focus-input100"></span>
					</div>

					<div class="aaaa" data-validate="Campo Obrigatorio">
						<p hidden>é admin?</p>
						<input class="hidden" type="radio" name="is_admin" id="is_admin" hidden>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit" id="submit">
								Registrar
							</button>
							<!-- <input type="submit" name="submit" id="submit"> -->
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Já possui uma conta?
						</span>

						<a class="txt2" href="./Login.php">
							Entrar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>