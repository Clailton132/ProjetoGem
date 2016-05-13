<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>KNOWLEDGE SYSTEMS LABORATORY</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- CSS Bootstrap -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/visual.css">

	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<style type="text/css">
	a:link, a:visited, a:active {
		text-decoration: none;
	}
	li.publicLI {
		list-style-type:none;
   	}
</style>
	
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="#">.:: LSC ::.</img></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#atuacao">Research Areas</a></li>
				<li><a href="#pessoas">Staff</a></li>
				<li><a href="#projetos">Projects</a></li>
				<li><a href="#recursos">Resources</a></li>
				<li><a href="#publicacoes">Publications</a></li>
      			</li>
				<li><a href="#sobre">Sobre</a></li>
				<li><a href="index.php"><img src="img/brasil.png"></span> Português</a></li> 
			</ul>
		</div>
	</div>
</nav>
  <?php 

  ?>
<div class="container-fluid"  style="margin-top: 50px;padding-left: 0px;padding-right: 0px;">
	<div class="row-fluid">
		<header>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #5cd65c;">
				<img style="height: auto; " class="img-responsive img-circle" src="img/bola.jpg">
				<h2>KNOWLEDGE SYSTEMS LABORATORY</h2>
			</div>
		</header>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margens" id="atuacao" >
			<div class="col-lg-12 text-center">
				 <h2>Research Areas</h2>   
				<hr class="star-light">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
						<h4>Multiagent Systems</h4>
						<p>Os Sistemas Multiagentes (SMA) formam uma sub-área da Inteligência artificial Distribuída e concentram-se no estudo de agentes autônomos em um universo multiagente. Para os SMA, o termo autônomo designa o fato de que os agentes têm uma existência própria, independente da existência de outros agentes.</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
						<h4>Natural Lnaguage Processing</h4>
						<p>é uma subárea da inteligência artificial e da linguística que estuda os problemas da geração e compreensão automática de línguas humanas naturais. Sistemas de geração de linguagem natural convertem informação de bancos de dados de computadores em linguagem normalmente compreensível ao ser humano, e sistemas de compreensão de linguagem natural convertem ocorrências de linguagem humana em representações mais formais, mais facilmente manipuláveis por programas de computador.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
						<h4>Virtual Reality</h4>
						<p>Realidade virtual é uma tecnologia de interface avançada entre um usuário e um sistema operacional. O objetivo dessa tecnologia é recriar ao máximo a sensação de realidade para um indivíduo, levando-o a adotar essa interação como uma de suas realidades temporais</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
						<h4>Object Oriented Systems</h4>
						<p>It is a model of analysis, design and programming of software systems based on the composition and interaction between different software units called objects.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
						<h4>Computing in Education</h4>
						<p>Educational computing refers to the use of the computer and its tools in schools as educational resource to be used by the teaching professional. Although the term computer is not the most current ( common in the 80s ), the term educational computing continues to be used by the teachers.</p>
					</div>
				</div>
			</div>	
		</div>	
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margens" id="pessoas" style="background: #5cd65c;">
			<div class="col-lg-12 text-center" id="pessoas" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
		            <h2>Staff</h2>
		            <hr class="star-light">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h4>Professors</h4>
						<!-- Função php que lista a url e nome dos professores -->
						<?php
							$conexao = mysqli_connect("127.0.0.1","root","","lsc");
							$dados = mysqli_query($conexao, "select * from professores");
							
							while ($produto = mysqli_fetch_array($dados)):
						?>
						<a href="<?= $produto['url']?>"><?= $produto['nome']?></a><br>
						<?php endwhile; ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h4>Scholarship DTI</h4>
						<!--Função php que lista os bolsistas -->
						<?php
							$conexao = mysqli_connect("127.0.0.1","root","","lsc");
							$dados = mysqli_query($conexao, "select * from bolsistas");
							
							while ($produto = mysqli_fetch_array($dados)):
						?>
							<p><?= $produto['nome']?></p>
						<?php endwhile; ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h4>PhD Students</h4>
						<!-- Função php que lista os doutorandos -->
						<?php
							$conexao = mysqli_connect("127.0.0.1","root","","lsc");
							$dados = mysqli_query($conexao, "select * from doutorandos");
							
							while ($produto = mysqli_fetch_array($dados)):
						?>
							<p><?= $produto['nome']?></p>
						<?php endwhile; ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h4>Masters Students</h4>
						<?php
							$conexao = mysqli_connect("127.0.0.1","root","","lsc");
							$dados = mysqli_query($conexao, "select * from mestrandos");
							
							while ($produto = mysqli_fetch_array($dados)):
						?>
							<p><?= $produto['nome']?></p>
						<?php endwhile; ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h4>Scholarship ITI</h4>
						<p>Igor Heidrich </p>
						<?php
							$conexao = mysqli_connect("127.0.0.1","root","","lsc");
							$dados = mysqli_query($conexao, "select * from bolsistas_iti");
							
							while ($produto = mysqli_fetch_array($dados)):
						?>
							<p><?= $produto['nome']?></p>
						<?php endwhile; ?>
					</div>
		        </div>	
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margens" id="projetos" >
			<div class="col-lg-12 text-center">
		        <h2>Projects</h2>
				<hr class="star-light">
		    </div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>MuseuVirtual</h4>
					<small></small><br></br>
					<p>The museuVirtual project aims to develop an authoring tool for the collaborative building of museums in virtual reality. In such museums 3D objects and/or images will be exposed and available to be directly explored using non immersive virtual reality - through the mouse and the keyboard. When accessible devices such as HMDs and gloves that allow immersive virtual reality can be used. The objects also will be manipulated by the museum visitor trough pre-defined commands similarly as in an adventure game. Moreover, the authoring tool will allow the creation of virtual guides or   bots that have knowledge about both the exhibited objects and the visitors themselves.</p>
					<small><strong>Sponsored:</strong><p> ProTeM-CC - CNPq</p></small>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>AgroREDE</h4>
					<small>Project articulation of rural actors in the state of Santa Catarina</small><br></br>
					<p>This project aims to structure a network of telematic services that articulates the diverse rural actors in particular those ones related to the family agriculture system in the State of Santa Catarina, Brazil. The underlying hypothesis is that the services provided will improve the life conditions of the families involved due to the sustainable development of their productive potential. This improvement is achieved with the access to information concerning production techniques and marketing. This network should share its problems and solutions, establishing joint strategies for the production and trade.</p>
					<small><strong></strong><p></p></small>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>MuVISC</h4>
					<small>Virtual Museum of Santa Catarina Island </small><br></br>
					<p>The Virtual Museum of Santa Catarina Island will create a virtual museum using the Santa Catarina Island photographs collection. Such collection focus on photographs by the island artists and inhabitants.</p>
					<small><strong>Sponsored:</strong><p> PAPED - CAPES</p></small>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>World of Actors</h4>
					<small>Introduction to Object-Oriented Programming</small><br></br>
					<p>The Actors World project aims to develop an environment that favour the learning process of concepts in the discipline of Introduction to Object-Oriented Programming.</p>
					<small><strong></strong><p></p></small>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>APSMA</h4>
					<small>Environments for Programming  of Multiagent Systems</small>
					<p>The ASPMA (Environments for Programming  of Multiagent Systems) project main goal is to use Actalk as a teaching tool in particular disciplines of the Computer Science course. Actalk is an actor-oriented programming environment implemented in the Visual Works (ParcPlace Inc.) system/environment. The project participants (undergrad, master, PhD students and lecturers) are put in contact with this environment aiming to use it in the development of various systems. Also, they work the NLP Parse Talk system, entirely implemented in Actalk.</p>
					<small><strong>Sponsored:</strong><p>FUNPESQUISA-UFSC</p></small>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>NALAMAS</h4>
					<small>Multiagent Systems for NLP</small>
					<p>The NALAMAS (Multiagent Systems for NLP) project aim is to explore the potential for multiagent systems (MAS) in the domain of Natural Language Processing (NLP). It is a 2-year collaborative project with partners from five universities in Brazil - PUCRS, UNICAMP, UFSC, USP, UFRGS - and one in Portugal - UNL. The project provides grants for studentships, travel support for meetings and conference attendance, computer equipment and software, and bibliographic materials.</p>
					<small><strong>Sponsored:</strong><p> ProTeM-CC - CNPq</p></small>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>MicroM</h4>
					<small>Authoring Tool for Virtual Reality Adventures</small>
					<p>The MicroM (Authoring Tool for Virtual Reality Adventures) software is an authoring tool for the creation of educational adventures in 3D. The system includes a library of scenarios and objects. MicroM was conceived to allow both teachers and students the authoring of virtual reality environments with a high degree of interactivity for educational purposes in a simple and friendly way. Such environments are constructed under the constructivist paradigm as the users can create virtual worlds in which the exploration and not the instruction is the main form of interaction.</p>
					<small><strong>Sponsored:</strong><p>PIBIC - CNPq</p></small>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>MVEE</h4>
					<small>Virtual microworlds for Engineering Education</small>
					<p>The overall objective of this project is the production of a general environment for the production of " adventures" educational applied to engineering education . The specific objectives are the study of the various building interactive environments systems , animation techniques , network interaction, virtual reality , etc. In addition, we intend to develop a specific environment for a chosen discipline , which will be effectively used in the classroom.</p>
					<small><strong>Sponsored:</strong><p>REESC - REENGE - FINEP</p></small>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4>POO-ENG</h4>
					<small>Object Oriented Programming in Engineering </small><br></br>
					<p>Objective model and implement a set of typical applications of engineering from the perspective of Object Oriented Programming . This set of examples will serve as the basis for computer education second engineering disciplines the prospect of Object Oriented Programming . They aim to guide the engineer to model reality on the computer using the prospect of POO.</p>
					<small><strong>Sponsored:</strong><p>REESC - REENGE - FINEP</p></small>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 projetos">
					<h4></h4>
					<small></small>
					<p></p>
					<small><strong></strong><p></p></small>
				</div>
			</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margens" id="recursos" style="background: #5cd65c;">
			<div class="col-lg-12 text-center">
		        <h2>Resources</h2>
		        <hr class="star-light">
		    </div>	
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h4>Equipments</h4>
				<ul>
				<?php
					$conexao = mysqli_connect("127.0.0.1","root","","lsc");
					$dados = mysqli_query($conexao, "select * from equipamentos");
						
					while ($produto = mysqli_fetch_array($dados)):
				?>
					<li><?= $produto['nome']?></li>
				<?php endwhile; ?>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h4>Physical space</h4>
				<img src="img/ctc-imagem.jpg">
				<p>110m2 Allocated in building the direction of the CTC</p>
				<p><strong>More information about the CTC on the link:</strong><a href="http://tvled.egc.ufsc.br/biblioteca/biblioteca/CTC/Final_Institucional_CTC.mp4" title="CTC-UFSC" ><br>(click to see the video - Only in Portuguese)</a> </p>
				<br>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margens" id="publicacoes" >
			<div class="col-lg-12 text-center">
		        <h2>Publications</h2>
					<hr class="star-light">
		    </div>
			<div class="text-center">
				<h5>References to the scientific production of the LSC can be found in the pages of professors to the laboratory:</h5>
				<ul>
					<li class="publicLI"><a href="http://http//www.inf.ufsc.br/~edla/">Edla Maria Faust Ramos</a></li>
					<li class="publicLI"><a href="http://www.inf.ufsc.br/~raul/">Raul Sidnei Wazlawick</a></li>
					<li class="publicLI"><a href="http://www.inf.ufsc.br/~mariani/">Antonio Carlos Mariani</a></li>
				</ul>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #5cd65c;">
			<div class="col-lg-12 text-center">
		        <h2>See too</h2>
		        <hr class="star-light">
		    </div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="outrosGrupos">
				<h3 class="text-center"><u>Other groups/labs:</u></h3>
				<br>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">Santa Fe Institute</a></h4>
					<p>The Santa Fe Institute is a private, non-profit, multidisciplinary research and education center, founded in 1984. Since its 
					founding SFI has devoted itself to creating a new kind of scientific research community, pursuing emerging science.  
	Operating as a small, visiting institution, SFI seeks to catalyze new collaborative, multidisciplinary projects that break down the barriers between the traditional disciplines, to spread its ideas and methodologies to other individuals and encourage the practical applications of its results. </p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">The Agent Society</a> </h4>
					<p>The Agent Society is a new international industry and professional organization established to assist in the widespread 
	development and emergence of intelligent agent technologies and markets. It's members consist of leading companies and 
	institutions in the agent field, working together under a non-profit organization aegis.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">The MIT Artificial Intelligence Lab</a> </h4>
					<p>The MIT Artificial Intelligence Laboratory conducts research in many aspects of intelligence. Their aims are two-fold: to 
	understand human intelligence at all levels, including reasoning, perception, language, development, learning, and social levels, and to build useful artifacts based on intelligence.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">University of Maryland Baltimore County Agent Web</a> </h4>
					<p>Information and resources about intelligent information agents, intentional agents, software agents, softbots, knowbots,infobots, etc. </p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">CRESS - the centre for research on simulation in the social sciences</a>  </h4>
					<p>CRESS, the Centre for Research on Simulation in the Social Sciences, is supported by the Economic and Social Research Council in order to increase awareness and use of simulation by social scientists. It will draw together and promote current research on the application and benefits of simulation methods across the social sciences.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">The Multi-agent Systems Research Group of Washington University, St. Louis</a> </h4>
					<p>The Multiagent Systems Research Group is concerned with designing, analyzing and implementing sophisticated AI systems consisting of multiple agents. Special focus is on the coordination of self-interested agents in open systems.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">Illinois Genetic Algorithm Laboratory</a>  </h4>
					<p>The research of the Illinois Genetic Algorithms Laboratory (IlliGAL) centers on the theory and application of genetic algorithms (GAs), search procedures based on the mechanics of natural genetics and natural selection. The Illinois Genetic Algorithms Laboratory's Director is David Goldberg.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">Complexity On-line</a></h4>
					<p>Complexity On-line is a scientific information network about complex systems. You will find access to sites, publications (including the Complexity On-line Journal ) and other sources of interest. </p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">DESIRE Research Programme </a></h4>
					<p>The DESIRE research programme focusses on the study of compositional multi-agent systems for complex (and often 
distributed) tasks and development methods for these systems. Such systems model and support users in coordinating andperforming complex cooperative tasks (e.g., design projects, distributed process control). </p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">UBWeb Computational Linguistics Research Group  </a></h4>
					<p>Research within the group centers around the developement of systems of automatic acquisition of linguistic knowledge. The recent goal shift in Computational Linguistics has meant the change of small inteligent systems by more basic linguistic tools. One basic concept is the development of automatic or semi-automatic systems of acquisition of linguistic knowledge that make our aims more easily and robustly reached. </p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">Centria  </a></h4>
					<p>The Centro de Inteligência Artificial(CENTRIA) is an institutionalized research centre of the Universidade Nova de Lisboa (UNL). Its main areas of activity are: Knowledge Representation and Reasoning, Logic Programming,  Natural Language, Constraints, Soft Computing and Autonomous Agents, Cognitive Science. <a href="http://www-ssdi.di.fct.unl.pt/~glint/Forum-LP/">(Forum-LP) </a></p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">Catálogo da SINTEF  </a></h4>
					<p>Nesta página encontra-se um catálogo de recursos computacionais da língua portuguesa que se encontram mencionados, ou directamente acessíveis, na Internet. O objectivo que presidiu a esta "catalogação" foi o de tornar mais fácil, a todos quantos se dedicam à tarefa de processar computacionalmente o português, o acesso aos recursos e a comunicação entre os vários criadores/utilizadores desses mesmos recursos. </p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href="">IRCS</a></h4>
					<p>The Institute for Research in Cognitive Science at the University of Pennsylvania fosters the development of a science of the human mind through the interaction of investigators from the disciplines of Linguistics, Mathematical Logic, Philosophy, Psychology, Computer Science, and Neuroscience.  </p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h4><a href=""></a></h4>
					<p></p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="sobre">
			<div class="col-lg-12 text-center">
		            <h2>About</h2>
								<hr class="star-light">
					<p>Knowledge Systems Laboratory (KSL) aims to offer space for multi- disciplinary research in Knowledge Systems . The results of this research should revert to the community , being applied in areas such as information retrieval systems and systems for cooperative work.
					Many applications in the field of Knowledge systems require expertise from different areas of computing and even other sciences. The LSC aims to be a forum for the integration of these specialties.
					<br><br>
					Contact address:  
					Teacher Dr. Raul S. Wazlawick  
					UFSC-CTC-INE-LSC  
					Cx. P. 476, 88040-900, Florianópolis-SC / BRAZIL - 
					Tel: 0xx 48 3317111 
					Fax: 0xx48 2319770  
  					<br><br>
					© 1999 LSC-INE-UFSC</p>						
		    </div>	
		</div>
	</div>
</div>

</body>
<script type="text/javascript">
</script>
</html>
