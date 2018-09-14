<!-- PARAGRAFO INICIAL -->
<div class="row">
	<div class="col-12">
		<p>Embora este guia não revele segredos para atingir automaticamente o primeiro lugar na busca (nem o Google revela isso :/), ao seguir os conselhos listados abaixo, é perceptível um <b>aumento drástico</b> da capacidade de <strong>rastrear</strong> (<em>crawling</em>), <strong>indexar</strong> e <strong>classificar</strong> os conteúdos do seu site.</p>
		<p>Vamos começar?</p>
	</div>


</div>
<!-- META TAGS -->
<div class="row">
	<div class="col-md-12 col-lg-5">
		<div class="content-box">
			<form id="user-input">
				<div class="form-group">
					<label for="title-input" class="col-form-label">
						Título da página
						<a data-toggle="collapse" href="#title" aria-expanded="false" aria-controls="title"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<div>
						<input type="text" class="form-control" id="title-input" placeholder="" maxlength="100">
						<div id="total-title" class="progress">
							<div id="progress-title" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>

						<div class="collapse" id="title">
							<small id="titleHelp" class="form-text text-muted">
								<p>A title tag é o título da sua página que aparece nos buscadores. Ela indica aos usuários e ao motor de busca qual o tópico daquela página. Uma boa title tag deve apresentar o conteúdo da página e deve conter a palavra-chave que você procura rankear. É recomendável que a title tag tenha uma média de 60 caracteres.</p>
								<p>Recomendações do Google:</p>
								<ul>
									<li>Descreva com precisão o conteúdo da sua página (resuma muito bem o que está na sua página);</li>
									<li>Crie títulos únicos para cada página (não tenha páginas em seu site com o mesmo título);</li>
									<li>Utilize títulos descritivos, mas curtos.</li>
								</ul>
								<p>Exemplo: Se um e-commerce de acessórios quer rankear para "Óculos de Sol", é recomendável criar um título como "Óculos de Sol: encontre um perfeito para você — Nome da loja".</p>
							</small>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="desc-input" class="col-form-label">
						Descrição da página
						<a data-toggle="collapse" href="#description" aria-expanded="false" aria-controls="description"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<div>
						<!--<input type="text" class="form-control" id="desc-input" placeholder="">-->
						<textarea class="form-control" name="desc-input" id="desc-input" rows="3" maxlength="160"></textarea>
						<div class="progress">
							<div id="progress-description" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<div class="collapse" id="description">
							<small id="titleHelp" class="form-text text-muted">
								<p>As tags de descrição são, como o nome sugere, a descrição do conteúdo daquela página, indicando para o Google (e outros motores de busca) qual é o conteúdo da sua página com mais detalhes. Elas provavelmente serão usadas como <i data-toggle="tooltip" data-placement="top" title="Snippet é isso.">snippets</i> de descrição da página visíveis para o usuário. Por isso, garanta que sua meta description seja convidativa e desperta a curiosidade.</p>
								<p>Embora sejam mais longas, é aconselhável escrever no máximo três frases curtas, compondo um pequeno parágrafo. Isso porque sua descrição deve aparecer sem cortes no buscador. Não há um consenso, atualmente, sobre o número de caracteres da descrição, mas sim sobre a largura que o seu texto ocupa. Por isso, é recomendável que essa descrição tenha entre 150 e 300 caracteres.</p>
								<p>Recomendações do Google:</p>
								<ul>
									<li>Descreva com precisão um resumo do conteúdo da sua página (evite escrever uma tag não relacionada com o conteúdo da sua página ou algo muito vago como "Esta é uma página do site X");</li>
									<li>Crie descrições únicas para cada página, assim o Google vai poder relacionar a busca de um indivíduo com seu conteúdo de uma melhor forma.</li>
								</ul>
								<p>Exemplo: Proteção para seus olhos, estilo e conforto: aliamos tudo isso nos melhores óculos escuros. Descubra um que seja ideal para você: acesse e confira todos os modelos disponíveis!</p>
							</small>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="url-input" class="col-form-label">
						URL da página
						<a data-toggle="collapse" href="#url" aria-expanded="false" aria-controls="url"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<div>
						<input type="url" class="form-control" id="url-input" placeholder="">
						<div class="collapse" id="url">
							<small id="titleHelp" class="form-text text-muted">
								<p>A URL é o endereço da sua página online e, portanto, única. É importante que ela seja de fácil compreensão, tanto para o usuário quanto para o buscador. Evite números e palavras complicadas. Sempre use a palavra-chave na URL.</p>
								<p>Recomendações do Google:</p>
								<ul>
									<li>Use https:// sempre que possível.</li>
								</ul>
								<p>Exemplo: https://www.nomedaloja.com/oculos/oculos-escuros.</p>
							</small>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="robots-input" class="col-form-label">
						Robots
						<a data-toggle="collapse" href="#robots" aria-expanded="false" aria-controls="robots"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<div>
						<select class="form-control" id="robots-input">
							<option selected option:disabled  style="display: none;">Escolha uma opção</option>
							<option>all</option>
							<option>none</option>
							<option>index</option>
							<option>follow</option>
							<option>noindex</option>
							<option>nofollow</option>
							<option>noimageclick</option>
							<option>noimageindex</option>
						</select>
						<div class="collapse" id="robots">
							<small id="titleHelp" class="form-text text-muted">
								<p>Essa parte é exclusivamente dedicada aos crawlers. A opção ‘index’ diz ao robô que você deseja que a página apareça nos resultados de busca, enquanto a opção ‘follow’ quer dizer que, a partir dessa página, os crawlers podem indexar as outras páginas presentes no seu site.</p>
								<p>Consequentemente, as opções ‘no-follow’ e ‘no-index’ impedem os robôs de realizarem a indexação. Esses comandos são comumente usados em áreas privadas, como telas de login, nos sites.</p>
							</small>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="author-input" class="col-form-label">
						Autor da página
						<a data-toggle="collapse" href="#author" aria-expanded="false" aria-controls="author"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<div>
						<input type="text" class="form-control" id="author-input" placeholder="">
						<div class="collapse" id="author">
							<small id="titleHelp" class="form-text text-muted">
								<p>Esta tag é utilizada para que o crawler identifique e exiba o nome do autor do conteúdo da página indexada.</p>
							</small>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="lang-input" class="col-form-label">
						Idioma
						<a data-toggle="collapse" href="#language" aria-expanded="false" aria-controls="language"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<!--<input type="text" class="form-control" id="lang-input" placeholder="">-->
					<div>
						<select class="form-control" id="lang-input">
							<option selected selected option:disabled style="display: none;">Escolha o idioma</option>
							<option value="pt-BR">Português (Brasil)</option>
							<option value="en">Inglês</option>
							<option value="es">Espanhol</option>

							<option value="af">Afrikaans</option>
							<option value="af-ZA">Afrikaans (South Africa)</option>
							<option value="ar">Arabic</option>
							<option value="ar-AE">Arabic (U.A.E.)</option>
							<option value="ar-BH">Arabic (Bahrain)</option>
							<option value="ar-DZ">Arabic (Algeria)</option>
							<option value="ar-EG">Arabic (Egypt)</option>
							<option value="ar-IQ">Arabic (Iraq)</option>
							<option value="ar-JO">Arabic (Jordan)</option>
							<option value="ar-KW">Arabic (Kuwait)</option>
							<option value="ar-LB">Arabic (Lebanon)</option>
							<option value="ar-LY">Arabic (Libya)</option>
							<option value="ar-MA">Arabic (Morocco)</option>
							<option value="ar-OM">Arabic (Oman)</option>
							<option value="ar-QA">Arabic (Qatar)</option>
							<option value="ar-SA">Arabic (Saudi Arabia)</option>
							<option value="ar-SY">Arabic (Syria)</option>
							<option value="ar-TN">Arabic (Tunisia)</option>
							<option value="ar-YE">Arabic (Yemen)</option>
							<option value="az">Azeri</option>
							<option value="az-Cyrl-AZ">Azeri (Cyrillic, Azerbaijan)</option>
							<option value="az-Latn-AZ">Azeri (Latin, Azerbaijan)</option>
							<option value="be">Belarusian</option>
							<option value="be-BY">Belarusian (Belarus)</option>
							<option value="bg">Bulgarian</option>
							<option value="bg-BG">Bulgarian (Bulgaria)</option>
							<option value="bs-Latn-BA">Bosnian (Bosnia and Herzegovina)</option>
							<option value="ca">Catalan</option>
							<option value="ca-ES">Catalan (Catalan)</option>
							<option value="cs">Czech</option>
							<option value="cs-CZ">Czech (Czech Republic)</option>
							<option value="cy-GB">Welsh (United Kingdom)</option>
							<option value="da">Danish</option>
							<option value="da-DK">Danish (Denmark)</option>
							<option value="de">German</option>
							<option value="de-AT">German (Austria)</option>
							<option value="de-DE">German (Germany)</option>
							<option value="de-CH">German (Switzerland)</option>
							<option value="de-LI">German (Liechtenstein)</option>
							<option value="de-LU">German (Luxembourg)</option>
							<option value="dv">Divehi</option>
							<option value="dv-MV">Divehi (Maldives)</option>
							<option value="el">Greek</option>
							<option value="el-GR">Greek (Greece)</option>
							<option value="en">English</option>
							<option value="en-029">English (Caribbean)</option>
							<option value="en-AU">English (Australia)</option>
							<option value="en-BZ">English (Belize)</option>
							<option value="en-CA">English (Canada)</option>
							<option value="en-GB">English (United Kingdom)</option>
							<option value="en-IE">English (Ireland)</option>
							<option value="en-JM">English (Jamaica)</option>
							<option value="en-NZ">English (New Zealand)</option>
							<option value="en-PH">English (Republic of the Philippines)</option>
							<option value="en-TT">English (Trinidad and Tobago)</option>
							<option value="en-US">English (United States)</option>
							<option value="en-ZA">English (South Africa)</option>
							<option value="en-ZW">English (Zimbabwe)</option>
							<option value="es">Spanish</option>
							<option value="es-AR">Spanish (Argentina)</option>
							<option value="es-BO">Spanish (Bolivia)</option>
							<option value="es-CL">Spanish (Chile)</option>
							<option value="es-CO">Spanish (Colombia)</option>
							<option value="es-CR">Spanish (Costa Rica)</option>
							<option value="es-DO">Spanish (Dominican Republic)</option>
							<option value="es-EC">Spanish (Ecuador)</option>
							<option value="es-ES">Spanish (Spain)</option>
							<option value="es-GT">Spanish (Guatemala)</option>
							<option value="es-HN">Spanish (Honduras)</option>
							<option value="es-MX">Spanish (Mexico)</option>
							<option value="es-NI">Spanish (Nicaragua)</option>
							<option value="es-PA">Spanish (Panama)</option>
							<option value="es-PE">Spanish (Peru)</option>
							<option value="es-PR">Spanish (Puerto Rico)</option>
							<option value="es-PY">Spanish (Paraguay)</option>
							<option value="es-SV">Spanish (El Salvador)</option>
							<option value="es-UY">Spanish (Uruguay)</option>
							<option value="es-VE">Spanish (Venezuela)</option>
							<option value="et">Estonian</option>
							<option value="et-EE">Estonian (Estonia)</option>
							<option value="eu">Basque</option>
							<option value="eu-ES">Basque (Basque)</option>
							<option value="fa">Persian</option>
							<option value="fa-IR">Persian (Iran)</option>
							<option value="fi">Finnish</option>
							<option value="fi-FI">Finnish (Finland)</option>
							<option value="fo">Faroese</option>
							<option value="fo-FO">Faroese (Faroe Islands)</option>
							<option value="fr">French</option>
							<option value="fr-BE">French (Belgium)</option>
							<option value="fr-CA">French (Canada)</option>
							<option value="fr-FR">French (France)</option>
							<option value="fr-CH">French (Switzerland)</option>
							<option value="fr-LU">French (Luxembourg)</option>
							<option value="fr-MC">French (Principality of Monaco)</option>
							<option value="gl">Galician</option>
							<option value="gl-ES">Galician (Galician)</option>
							<option value="gu">Gujarati</option>
							<option value="gu-IN">Gujarati (India)</option>
							<option value="he">Hebrew</option>
							<option value="he-IL">Hebrew (Israel)</option>
							<option value="hi">Hindi</option>
							<option value="hi-IN">Hindi (India)</option>
							<option value="hr">Croatian</option>
							<option value="hr-BA">Croatian (Bosnia and Herzegovina)</option>
							<option value="hr-HR">Croatian (Croatia)</option>
							<option value="hu">Hungarian</option>
							<option value="hu-HU">Hungarian (Hungary)</option>
							<option value="hy">Armenian</option>
							<option value="hy-AM">Armenian (Armenia)</option>
							<option value="id">Indonesian</option>
							<option value="id-ID">Indonesian (Indonesia)</option>
							<option value="is">Icelandic</option>
							<option value="is-IS">Icelandic (Iceland)</option>
							<option value="it">Italian</option>
							<option value="it-CH">Italian (Switzerland)</option>
							<option value="it-IT">Italian (Italy)</option>
							<option value="ja">Japanese</option>
							<option value="ja-JP">Japanese (Japan)</option>
							<option value="ka">Georgian</option>
							<option value="ka-GE">Georgian (Georgia)</option>
							<option value="kk">Kazakh</option>
							<option value="kk-KZ">Kazakh (Kazakhstan)</option>
							<option value="kn">Kannada</option>
							<option value="kn-IN">Kannada (India)</option>
							<option value="ko">Korean</option>
							<option value="kok">Konkani</option>
							<option value="kok-IN">Konkani (India)</option>
							<option value="ko-KR">Korean (Korea)</option>
							<option value="ky">Kyrgyz</option>
							<option value="ky-KG">Kyrgyz (Kyrgyzstan)</option>
							<option value="lt">Lithuanian</option>
							<option value="lt-LT">Lithuanian (Lithuania)</option>
							<option value="lv">Latvian</option>
							<option value="lv-LV">Latvian (Latvia)</option>
							<option value="mi-NZ">Maori (New Zealand)</option>
							<option value="mk">Macedonian</option>
							<option value="mk-MK">Macedonian (Former Yugoslav Republic of Macedonia)</option>
							<option value="mn">Mongolian</option>
							<option value="mn-MN">Mongolian (Cyrillic, Mongolia)</option>
							<option value="mr">Marathi</option>
							<option value="mr-IN">Marathi (India)</option>
							<option value="ms">Malay</option>
							<option value="ms-BN">Malay (Brunei Darussalam)</option>
							<option value="ms-MY">Malay (Malaysia)</option>
							<option value="mt-MT">Maltese (Malta)</option>
							<option value="nb-NO">Norwegian, Bokmal (Norway)</option>
							<option value="nl">Dutch</option>
							<option value="nl-BE">Dutch (Belgium)</option>
							<option value="nl-NL">Dutch (Netherlands)</option>
							<option value="nn-NO">Norwegian, Nynorsk (Norway)</option>
							<option value="no">Norwegian</option>
							<option value="ns-ZA">Northern Sotho (South Africa)</option>
							<option value="pa">Punjabi</option>
							<option value="pa-IN">Punjabi (India)</option>
							<option value="pl">Polish</option>
							<option value="pl-PL">Polish (Poland)</option>
							<option value="pt">Portuguese</option>
							<option value="pt-BR">Portuguese (Brazil)</option>
							<option value="pt-PT">Portuguese (Portugal)</option>
							<option value="quz-BO">Quechua (Bolivia)</option>
							<option value="quz-EC">Quechua (Ecuador)</option>
							<option value="quz-PE">Quechua (Peru)</option>
							<option value="ro">Romanian</option>
							<option value="ro-RO">Romanian (Romania)</option>
							<option value="ru">Russian</option>
							<option value="ru-RU">Russian (Russia)</option>
							<option value="sa">Sanskrit</option>
							<option value="sa-IN">Sanskrit (India)</option>
							<option value="se-FI">Sami (Northern) (Finland)</option>
							<option value="se-NO">Sami (Northern) (Norway)</option>
							<option value="se-SE">Sami (Northern) (Sweden)</option>
							<option value="sk">Slovak</option>
							<option value="sk-SK">Slovak (Slovakia)</option>
							<option value="sl">Slovenian</option>
							<option value="sl-SI">Slovenian (Slovenia)</option>
							<option value="sma-NO">Sami (Southern) (Norway)</option>
							<option value="sma-SE">Sami (Southern) (Sweden)</option>
							<option value="smj-NO">Sami (Lule) (Norway)</option>
							<option value="smj-SE">Sami (Lule) (Sweden)</option>
							<option value="smn-FI">Sami (Inari) (Finland)</option>
							<option value="sms-FI">Sami (Skolt) (Finland)</option>
							<option value="sq">Albanian</option>
							<option value="sq-AL">Albanian (Albania)</option>
							<option value="sr">Serbian</option>
							<option value="sr-Cyrl-BA">Serbian (Cyrillic) (Bosnia and Herzegovina)</option>
							<option value="sr-Cyrl-CS">Serbian (Cyrillic, Serbia)</option>
							<option value="sr-Latn-BA">Serbian (Latin) (Bosnia and Herzegovina)</option>
							<option value="sr-Latn-CS">Serbian (Latin, Serbia)</option>
							<option value="sv">Swedish</option>
							<option value="sv-FI">Swedish (Finland)</option>
							<option value="sv-SE">Swedish (Sweden)</option>
							<option value="sw">Kiswahili</option>
							<option value="sw-KE">Kiswahili (Kenya)</option>
							<option value="syr">Syriac</option>
							<option value="syr-SY">Syriac (Syria)</option>
							<option value="ta">Tamil</option>
							<option value="ta-IN">Tamil (India)</option>
							<option value="te">Telugu</option>
							<option value="te-IN">Telugu (India)</option>
							<option value="th">Thai</option>
							<option value="th-TH">Thai (Thailand)</option>
							<option value="tn-ZA">Tswana (South Africa)</option>
							<option value="tr">Turkish</option>
							<option value="tr-TR">Turkish (Turkey)</option>
							<option value="tt">Tatar</option>
							<option value="tt-RU">Tatar (Russia)</option>
							<option value="uk">Ukrainian</option>
							<option value="uk-UA">Ukrainian (Ukraine)</option>
							<option value="ur">Urdu</option>
							<option value="ur-PK">Urdu (Islamic Republic of Pakistan)</option>
							<option value="uz">Uzbek</option>
							<option value="uz-Cyrl-UZ">Uzbek (Cyrillic, Uzbekistan)</option>
							<option value="uz-Latn-UZ">Uzbek (Latin, Uzbekistan)</option>
							<option value="vi">Vietnamese</option>
							<option value="vi-VN">Vietnamese (Vietnam)</option>
							<option value="xh-ZA">Xhosa (South Africa)</option>
							<option value="zh-CN">Chinese (People's Republic of China)</option>
							<option value="zh-HK">Chinese (Hong Kong S.A.R.)</option>
							<option value="zh-CHS">Chinese (Simplified)</option>
							<option value="zh-CHT">Chinese (Traditional)</option>
							<option value="zh-MO">Chinese (Macao S.A.R.)</option>
							<option value="zh-SG">Chinese (Singapore)</option>
							<option value="zh-TW">Chinese (Taiwan)</option>
							<option value="zu-ZA">Zulu (South Africa)</option>
						</select>
						<div class="collapse" id="language">
							<small id="titleHelp" class="form-text text-muted">
								<p>Selecione em qual idioma está o seu site para melhorar seu rankeamento.</p>
							</small>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="key-input" class="col-form-label">
						Keywords
						<a data-toggle="collapse" href="#keywords" aria-expanded="false" aria-controls="keywords"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<div>
						<input type="text" class="form-control" id="key-input" placeholder="Palavras chave separadas por vírgula">
						<div class="collapse" id="keywords">
							<small id="titleHelp" class="form-text text-muted">
								<p>Esta seção identifica a palavra ou palavras-chave que você deseja rankear. Isso facilita o trabalho dos crawlers, mas lembre-se que o algoritmo de rankeamento considera outros fatores.</p>
							</small>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>	
	<div class="col-md-12 col-lg-7" id="">
		<h3>Meta Tags</h3>
				<p>As <strong>Meta Tags</strong> são trechos de informação inseridos no código fonte de uma página. Elas são importantes formas de seu site e conteúdo serem expressos para os motores de busca, alavancando o SEO. Todas as suas páginas (todas!) devem ter essas tags personalizadas. Abaixo, temos as mais importantes que não podem faltar no seu site.</p>

		<div id="google" class="card google mx-auto">
			<div class="card-body">
				<h6 class="card-subtitle mb-2 text-muted">Exemplo de como sua página vai aparecer no Google</h6>
				<div id="title-preview" class="googleTitle"></div>
				<div id="url-preview" class="googleURL"></div>
				<div id="desc-preview" class="googleDescription"></div>
			</div>
		</div>
	</div>
</div>
<!-- OPEN GRAPH -->
<div class="row">
	<div class="col-md-12 col-lg-5">
		<div class="content-box">
			<form id="user-input">
				<div class="form-group">
				<h4>Facebook e Twitter</h4>

					<label for="ogtitle-input" class="col-form-label">
						Título
						<i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Facebook"></i>
						<i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Twitter"></i>
						<a data-toggle="collapse" href="#ogtitle" aria-expanded="false" aria-controls="ogtitle"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<div>
						<input type="text" class="form-control" id="ogtitle-input" placeholder="">

						<div class="collapse" id="ogtitle">
							<small id="titleHelp" class="form-text text-muted">
								<p>Adicione um breve título para informar às pessoas o assunto do seu anúncio. Isso não aparecerá em todos os posicionamentos. O limite para o título é de 40 caracteres. Você pode adicionar mais texto e ultrapassar o limite de caracteres, mas o texto pode aparecer cortado quando as pessoas virem seu anúncio em determinados posicionamentos, como, por exemplo, no Feed de Notícias do celular.</p>
							</small>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="ogdesc-input" class="col-form-label">
						Descrição
						<i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Facebook"></i>
						<i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Twitter"></i>
						<a data-toggle="collapse" href="#ogdescription" aria-expanded="false" aria-controls="ogdescription"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<div>
						<input type="text" class="form-control" id="ogdesc-input" placeholder="">

						<div class="collapse" id="ogdescription">
							<small id="titleHelp" class="form-text text-muted">
								<p>Adicione um texto para enfatizar por que as pessoas devem acessar o seu site. Isso não aparecerá em todos os posicionamentos.</p>
							</small>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="ogurl-input" class="col-form-label">
						URL
						<i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Facebook"></i>
						<i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Twitter"></i>
						<a data-toggle="collapse" href="#ogurl" aria-expanded="false" aria-controls="ogurl"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<div>
						<input type="url" class="form-control" id="ogurl-input" placeholder="">

						<div class="collapse" id="ogurl">
							<small id="titleHelp" class="form-text text-muted">
								<p>Insira a URL do site que você deseja promover.</p>
								<p>Ex: http://www.exemplo.com/página</p>
							</small>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="ogimageInput" class="col-form-label">
						URL da imagem
						<i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Facebook"></i>
						<i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Twitter"></i>
						<a data-toggle="collapse" href="#ogimage" aria-expanded="false" aria-controls="ogimage"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<div>
						<input type="url" class="form-control" id="ogimageInput" placeholder="">

						<div class="collapse" id="ogimage">
							<small id="titleHelp" class="form-text text-muted">
								<p>Escolha a imagem que você deseja usar no seu anúncio. <a href="https://www.facebook.com/business/ads-guide">Saiba mais</a>.</p>
								<p>Tamanho de imagem recomendado:</p>
								<ul>
									<li>1.200 x 628 pixels</li>
									<li>Proporção da imagem: 1,91:1</li>
									<li>Para maximizar a veiculação do anúncio, use uma imagem que contenha pouco ou nenhum texto sobreposto. <a href="https://www.facebook.com/business/help/980593475366490">Saiba mais</a>.</li>
								</ul>
							</small>
						</div>
					</div>
				</div>

				<!-- Call to Action -->
				<!--
					<div class="form-group">
						<label for="CallToAction-input" class="col-form-label">
							Chamada para ação
							<i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Facebook"></i>
							<a data-toggle="collapse" href="#CallToAction" aria-expanded="false" aria-controls="CallToAction"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
						</label>
						<div>
							<select class="form-control" id="CallToAction-input"> 
								<option>Nenhum botão</option>
								<option>Assinar</option>
								<option>Assistir Mais</option>
								<option>Baixar</option>
								<option>Cadastre-se</option>
								<option>Como chegar</option>
								<option>Comprar agora</option>
								<option>Enviar mensagem</option>
								<option>Fale conosco</option>
								<option>Ligar agora</option>
								<option>Obter horários das sessões</option>
								<option>Ouvir agora</option>
								<option>Reservar agora</option>
								<option>Saiba Mais</option>
								<option>Salvar</option>
								<option>Solicitar agora</option>
								<option>Solicitar hora marcada</option>
								<option>Ver cardápio</option>
							</select>

							<div class="collapse" id="CallToAction">
								<small id="titleHelp" class="form-text text-muted">
									<p>Escolha a ação que você quer que as pessoas executem quando virem seu anúncio.</p>
								</small>
							</div>
						</div>
					</div>
				-->


				<div class="form-group">
					<label for="ogauthor-input" class="col-form-label">
						Autor
						<i class="fa fa-facebook" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Facebook"></i>
						<i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Twitter"></i>
						<a data-toggle="collapse" href="#ogauthor" aria-expanded="false" aria-controls="ogauthor"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
					</label>
					<div>
						<input type="text" class="form-control" id="ogauthor-input" placeholder="">

						<div class="collapse" id="ogauthor">
							<small id="titleHelp" class="form-text text-muted">
								<p>Caso faça sentido destacar o autor do conteúdo da página, basta preencher este campo com o nome de quem a produziu.
									<br>
									Esse campo é <b>opcional</b>.</p>
								</small>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="ttimage-input" class="col-form-label">
							Destacar Imagem
							<i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Twitter"></i>
							<a data-toggle="collapse" href="#ttimage" aria-expanded="false" aria-controls="ttimage"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Aumentar o tamanho da imagem">help</i></a>
						</label>
						<div>
							<div class="form-checkbox">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" id="ttimage-check"> 100%
								</label>
							</div>

							<div class="collapse" id="ttimage">
								<small id="titleHelp" class="form-text text-muted">
									<p>Caso você deseje aumentar o tamanho da imagem ao divulgar o seu link no Twitter, basta marcar esse check.</p>
								</small>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="exampleFormControlInput1" class="col-form-label">
							Username do site
							<i class="fa fa-twitter" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tag para o Twitter"></i>
							<a data-toggle="collapse" href="#ttsite" aria-expanded="false" aria-controls="ttsite"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
						</label>
						<div>
							<input type="text" class="form-control" id="ttsite-input" placeholder="">

							<div class="collapse" id="ttsite">
								<small id="titleHelp" class="form-text text-muted">
									<p>
										O ID no Twitter do site.
										<br>
										Ex: rockcontent
										<br>
										<br>
										Esse campo é <b>opcional</b>.
									</p>
								</small>
							</div>
						</div>
					</div>
			</form>
		</div>
	</div>
	<!-- Facebook e Twitter Preview -->
	<div class="col-md-12 col-lg-7" id="">	
		<h3>Open Graph</h3>
			<p>As tags Open Graph vão te permitir personalizar o que aparecerá no compartilhamento de mídias sociais como o Facebook, Twitter, LinkedIn, entre outras.</p>
		<div id="og" class="card og">
			<div>
				<div class="row" style="margin-bottom: 10px; padding-top: 10px; padding-left: 10px;">
					<div class="col-2" style="padding-right: 0px;">
						<img class="_s0 _4ooo _5xib _5sq7 _44ma _rw img" src="https://scontent.fplu11-1.fna.fbcdn.net/v/t1.0-1/p50x50/10373675_866032716757827_7992496437931917105_n.png?_nc_cat=1&amp;oh=4fcdae69d67330d37b8ee9edab615358&amp;oe=5BFC97DE" alt="" aria-label="Facebook" role="img" style="border-radius: 50%">
					</div>
					<div class="col-10" style="margin-left: -15px;">
						<div class="row">
							<strong>Breno Poggiali de Sousa</strong>
						</div>
						<div class="row">
							Agora - Cidade, País
						</div>
					</div>
				</div>
				<div class="ogText">Texto personalizável que acompanha o seu post do Facebook.</div>
				<div>
					<img id="ogimgUserPreview" class="ogImage" width="100%">
				</div>
				<div class="facebookgray" style="padding-left: 13px; width: 100%;">
					<div id="ogurl-user-preview" class="ogURL" style="text-transform: uppercase; color: #606770; font-size: 13px; padding-top: 5px;"></div>
					<div id="ogtitle-user-preview" class="ogTitle"></div>
					<div id="ogdesc-user-preview" class="ogDescription"></div>
				</div>
				<img src="https://image.ibb.co/c4o7vK/curtidas_facebook.png" width="100%">
			</div>
		</div>
		<div id="ogTwitter" class="card ogTwitter">
			<div class="card-body" style="padding-top: 10px;">
				<div class="row">
					<div class="col-1" id="nopadding">
						<!-- Imagem do Twitter -->
						<img class="Avatar Avatar--edge"  data-scribe="element:avatar" data-src-2x="https://pbs.twimg.com/profile_images/1013798240683266048/zRim1x6M_bigger.jpg" alt="" data-src-1x="https://pbs.twimg.com/profile_images/1013798240683266048/zRim1x6M_normal.jpg" src="https://pbs.twimg.com/profile_images/1013798240683266048/zRim1x6M_normal.jpg" style="border-radius: 50%;">
					</div>
					<div class="col-11">
						<div class="row">
							<div>&nbsp;&nbsp;&nbsp;
								<strong>Twitter</strong> @Twitter • agora
							</div>
						</div>
						<div class="ogTwitterText">Texto personalizável que acompanha o link da sua página. (Tweet até 140 caracteres)</div>
						<div class="card" style="width: 100%;">
							<div class="" id="twitterpreview1">
								<div class="" id="twitterpreview2">
									<img id="ogTwitterimgUserPreview" class="imgthumbnail">
								</div>
								<div class="" id="twitterpreview3">
									<div id="twitterpreview4" class="card-body" style="">
										<div id="ogTwittertitle-user-preview" class="ogTwitterTitle"></div>
										<div id="ogTwitterdesc-user-preview" class="ogTwitterDescription"></div>
										<div id="ogTwitterurl-user-preview" class="ogTwitterURL"></div>
									</div>
								</div>
							</div>
						</div>
					<img src="http://oi67.tinypic.com/ap8dps.jpg" width="100%" style="margin-left: 1px">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- EXTRAS -->
<div class="row">
	<div class="col-md-12 col-lg-5">
		<div class="content-box">
			<form id="user-input">
					<div class="form-group">
						<label for="" class="col-form-label">
							ID do Google Analytics
							<a data-toggle="collapse" href="#analytics" aria-expanded="false" aria-controls="analytics"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
						</label>
						<div>
							<input type="text" class="form-control" id="analytics-input" placeholder="UA-12345678-90" maxlength="20">
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-form-label">
							ID do Google Tag Manager
							<a data-toggle="collapse" href="#tagmanager" aria-expanded="false" aria-controls="tagmanager"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
						</label>
						<div>
							<input type="text" class="form-control" id="tagmng-input" placeholder="GTM-ABCDE1" maxlength="20">
						</div>
					</div>

					<div class="form-group">
						<label for="bootstrap-input" class="col-form-label">
							Bootstrap
							<a data-toggle="collapse" href="#bootstrap" aria-expanded="false" aria-controls="bootstrap"><i class="material-icons" data-toggle="tooltip" data-placement="top" title="Clique aqui e saiba o que escrever nesse campo">help</i></a>
						</label>
						<div>
							<div class="form-checkbox">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" id="bootstrap-check"> Incluir (versão 4)
								</label>
							</div>
						</div>
					</div>
			</form>
		</div>
	</div> 
	<div class="col-md-12 col-lg-7">
		<h3>Extras</h3>

		<p>As tags estão todas prontas?! Ótimo! Basta copiar o código apresentado no box ao lado e inserí-lo em sua página.</p>
		<p>Agora vamos dar algumas dicas extras para ara continuar aprendendo sobre sua página, pois é muito importante observá-la de perto para trazer o público certo para vê-la.</p>

	</div>
</div>
<!-- CODIGO GERADO -->	
<div class="row">
	<div class="col-12">
		Hora de colocar o código dentro do site:
			<h6>Esse código deve entrar no <strong>Head</strong></h6>
			<div id="user-data" class="content-box bg-dark text-white">
				<pre><code id="code-copy" class="language-html" data-lang="html"><?php include 'code-head.php'; ?></code></pre>
				<div class="text-right">
					<a href="#" class="btn btn-outline-light btn-sm" id="copy-code-btn" data-toggle="tooltip" data-placement="top" title="Copiar para a área de trabalho">Copiar</a>
				</div>
			</div>
			<div id="body">
				<br>
				<h6>Esse código deve entrar no <strong>Body</strong></h6>
				<div id="user-data" class="content-box bg-dark text-white">
					<pre><code id="code-copy-body" class="language-html" data-lang="html"><?php include 'code-body.php'; ?></code></pre>
					<div class="text-right">
						<a href="#" class="btn btn-outline-light btn-sm" id="copy-code-body-btn" data-toggle="tooltip" data-placement="top" title="Copiar para a área de trabalho">Copiar</a>
					</div>
				</div>
			</div>
	</div>
</div>

		<div class="container collapse">
			<div class="col">
				<img src="img/gente.png" alt="" class="img-fluid">
			</div>
			<div class="card-columns">
				<div class="card">
					<img class="card-img-top" src="img/gente.png" alt="Card image cap">
					<div class="card-body">
						<h4 class="card-title">Dica importante</h4>
						<p class="card-text">A criação de conteúdo atraente e útil é <strong>o fator que provavelmente exercerá mais influência sobre o desempenho do seu site</strong>, mais que qualquer outro discutido aqui. Os usuários sabem reconhecer bons conteúdos e estão propensos a direcionar outros usuários a eles. Esse redirecionamento pode ocorrer por meio de postagens de blog, serviços de mídia social, e-mails, fóruns ou outros meios.</p>
					</div>
				</div>
				<div class="card p-3">
					<blockquote class="blockquote mb-0 card-body">
						<p>O buzz orgânico (ou de boca a boca) é o que ajuda a construir a reputação do seu site com os usuários e o Google, e isso raramente se consegue sem conteúdo de qualidade.</p>
						<footer class="blockquote-footer">
							<small class="text-muted">
								Google em <a href="https://support.google.com/webmasters/answer/7451184?hl=pt-BR"><cite title="Otimização de mecanismos de pesquisa (SEO) para iniciantes">Otimização de mecanismos de pesquisa (SEO) para iniciantes</cite></a>.
							</small>
						</footer>
					</blockquote>
				</div>
				<div class="card">
					<img class="card-img-top" src="..." alt="Card image cap">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card bg-primary text-white text-center p-3">
					<blockquote class="blockquote mb-0">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
						<footer class="blockquote-footer">
							<small>
								Someone famous in <cite title="Source Title">Source Title</cite>
							</small>
						</footer>
					</blockquote>
				</div>
				<div class="card text-center">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img" src="..." alt="Card image">
				</div>
				<div class="card p-3 text-right">
					<blockquote class="blockquote mb-0">
						<p>O buzz orgânico (ou de boca a boca) é o que ajuda a construir a reputação do seu site com os usuários e o Google, e isso raramente se consegue sem conteúdo de qualidade.</p>
						<footer class="blockquote-footer">
							<small class="text-muted">
								Someone famous in <cite title="Source Title">Source Title</cite>
							</small>
						</footer>
					</blockquote>
				</div>
				<div class="card">
					<div class="card-body">
						<p class="card-text">Cheque o <b>Search Engine Optimization (SEO) Starter Guide</b> (<a href="https://support.google.com/webmasters/answer/7451184" target="_blank">inglês</a> - <a href="https://support.google.com/webmasters/answer/7451184?hl=pt-BR" target="_blank">português</a>) sempre que puder. Trata-se de um Guia com as informações atualizadas sobre SEO criado pelo próprio Google.</p>
						<p class="card-text"><small class="text-muted">Última atualização em dezembro de 2017</small></p>
					</div>
				</div>
			</div>
		</div>