<?php include "includes/header.php";?>
<?php
//For this exercise, we will learn about isset, the $_Get global variable and the switch ---WHEW!

//data_defailt_timezone_set('America/Los_Angeles');
//$var100 = 'test';
//if(isset($var)){
//    print_r(isset($var1));
//}else{
//    echo 'It has not been set';
//}

// is today set, if today is set, yippy skippy
//else the data function for the day will be assigned to today
if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

switch($today){       
    case 'Sunday' :
    $food = 'Sunday is Cheeseburger Day!';
    $pic = 'images/cheeseburger.jpg';
    $alt = 'Cheeseburger';
    $content = 'A cheeseburger is a hamburger topped with cheese. Traditionally, the slice of cheese is placed on top of the meat patty, but the burger can include variations in structure, ingredients and composition. The cheese is usually added to the cooking hamburger patty shortly before serving, which allows the cheese to melt. As with other hamburgers, a cheeseburger may include toppings, such as lettuce, tomato, onion, pickles, bacon, mayonnaise, ketchup, mustard or other toppings.';
    $color = 'coral';
        break;
    
    case 'Monday' :
    $food = 'Monday is Fries Day!';
    $pic = 'images/fries.jpg';
    $alt = 'Fries';
    $content = 'French fries are served hot, either soft or crispy, and are generally eaten as part of lunch or dinner or by themselves as a snack, and they commonly appear on the menus of diners, fast food restaurants, pubs, and bars. They are usually salted and, depending on the country, may be served with ketchup, vinegar, mayonnaise, tomato sauce, or other local specialties. Fries can be topped more heavily, as in the dishes of poutine or chili cheese fries. ';
    $color = 'yellow';
        break;
        
    case 'Tuesday' :
    $food = 'Tuesday is Taco Day!';
    $pic = 'images/taco.jpg';
    $alt = 'Taco';
    $content = 'A taco is a traditional Mexican dish consisting of a small hand-sized corn or wheat tortilla topped with a filling. The tortilla is then folded around the filling and eaten by hand. A taco can be made with a variety of fillings, including beef, pork, chicken, seafood, beans, vegetables, and cheese, allowing great versatility and variety. They are often garnished with various condiments, such as salsa, guacamole, or sour cream, and vegetables, such as lettuce, onion, tomatoes, and chiles. Tacos are a common form of antojitos, or Mexican street food, which have spread around the world.';
    $color = '#666666';
        break;
        
        case 'Wednesday' :
    $food = 'Wednesday is Fried Chicken  Day!';
    $pic = 'images/friedchicken.jpg';
    $alt = 'Fried Chicken';
    $content = 'Southern fried chicken, also known simply as fried chicken, is a dish consisting of chicken pieces which have been coated in a seasoned batter and pan-fried, deep fried, or pressure fried. The breading adds a crisp coating or crust to the exterior of the chicken while retaining juices in the meat. ';
    $color = '#FF9900';
        break;
    
        case 'Thursday' :
    $food = 'Thursday is chowmein  Day!';
    $pic = 'images/chowmein.jpg';
    $alt = 'Chowmein';
    $content = 'Chow mein are Chinese stir-fried noodles with vegetables and sometimes meat or tofu; the name is a romanization of the Taishanese chāu-mèn. The dish is popular throughout the Chinese diaspora and appears on the menus of most Chinese restaurants abroad. It is particularly popular in India, Nepal, the UK, and the US.';
    $color = '#999933';
        break;
        
    case 'Friday' :
    $food = 'Friday is Fried Rice Day!';
    $pic = 'images/friedrice.jpg';
    $alt = 'Fried Rice';
    $content = 'Fried rice is a dish of cooked rice that has been stir-fried in a wok or a frying pan and is usually mixed with other ingredients such as eggs, vegetables, seafood, or meat. It is often eaten by itself or as an accompaniment to another dish. Fried rice is a popular component of East Asian, Southeast Asian and certain South Asian cuisines. As a homemade dish, fried rice is typically made with ingredients left over from other dishes, leading to countless variations. Fried rice first developed during the Sui Dynasty in China and as such all fried rice dishes can trace their origins to Chinese fried rice.';
    $color = 'pink';
        break;
        
    case 'Saturday' :
    $food = 'Saturday is Pho Day!';
    $pic = 'images/pho.jpg';
    $alt = 'Pho';
    $content = 'Phở or pho is a Vietnamese soup consisting of broth, rice noodles (bánh phở), herbs, and meat (usually beef) (phở bò), sometimes chicken (phở gà). Pho is a popular food in Vietnam where it is served in households, street stalls and restaurants countrywide. Pho is considered Vietnam\'s national dish.';
    $color = '#CCFF99';
        break;
}

?>
    <style>
        aside {
            background-color:<?php echo $color; ?>;
        }
    </style>
    <h1><?php echo $food; ?></h1>
    <p>Click below to find out what awesome food we have for each day of the week!</p>
    <ul>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
    </ul>
    
    <img src="<?php echo $pic; ?>" 	height="400" width="400" alt="<?php echo $alt; ?>">

    <aside>
    <h3><?php echo $food; ?></h3>
    <p><?php echo $content; ?></p>
    </aside>

<?php include "includes/footer.php";?>