<?php
	class Recipe {

			public $id;
			public $name;
			public $description;
			public $ingredients;
			public $createdDatetime;

			public function __construct($name, $description, $ingredients) {
				$this->name = $name;
				$this->description = $description;
				$this->ingredients = $ingredients;
			}

			public function delete(){
				// echo "A receita " + $this->name + " vai ser apagada.";
			}

			public function addIngredient($ingredient){
				// echo "Adicionando ingrediente à receita " + $this.name;
				array_push($this->ingredients, $ingredient);
			}

			public function removeIngredient($ingredient){

			}
	}

	$recipes = array();

	$pudimRecipe = new Recipe("Pudim", 
			"O pudim faz-se com os dois ovos, ...", 
			array("2 ovos", "3 colheres de açucar", "1 litro de leite")
		);

	$cakeRecipe = new Recipe("Bolo de chocolate", 
			"O Bolo de chocolate faz-se com os dois ovos, ...", 
			array("2 ovos", "3 colheres de açucar", "1 litro de leite", "200gr chocolate de leite em pó")
		);

	$pavlovaRecipe = new Recipe("Pavlova", 
			"A pavlova faz-se com os dois ovos, ...", 
			array("2 ovos", "3 colheres de açucar", "1 litro de leite", "fios de ovo")
		);

	array_push($recipes, $pudimRecipe);
	array_push($recipes, $cakeRecipe);
	array_push($recipes, $pavlovaRecipe);

	$pavlovaRecipe->addIngredient("100gr de chocolate preto");
	$cakeRecipe->addIngredient("Raspa de casca de limão");
	$pudimRecipe->addIngredient("Leite condensado");
?>
<html>
	<head>
		<title>Receitas</title>
	</head>
	<body>
		<h1>Receitas</h1>
		<?php
			foreach($recipes as &$recipe)
			{
		?>
			<h2><?php echo $recipe->name; ?></h2>
			<b>Ingredientes</b>
			<ul>
				<?php
					foreach($recipe->ingredients as &$ingredient)
					{
				?>	
					<li><?php echo $ingredient; ?></li>
				<?php 
					}
				?>		
			</ul>
			<b>Instruções de preparação</b>
			<p>
				<?php echo $recipe->description; ?>
			</p>
		<?php
			}
		?>
	</body>