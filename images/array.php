<h1> Arrays </h1>

<?php 
//Indexed or numeric arrays
$fname = ["Alex","Peter", "James"];

echo '<br>';

print_r($fname);
$colors = array ("Black","Green", "Yellow","White","Red", "Blue");

?>

<pre>
 <?php print_r($colors); ?>
</pre>

<?php print $fname[1]; ?>
<?php
//Associative Arrays

$user = {
    "fullname" => "Alex Okame",
    "email" => "AOkama@yahoo.com",
    "phone" => "+2547855555"
}

?>
<pre>
 <?php print_r($user); ?>
</pre>

<?php
//Multidimensional Arrays 

$user_details =[
    "Director" => array(
        "fullname" => "Alex Okame",
        "email" => "AOkama@yahoo.com",
        "Address"=> "Madaraka"
        "phone" =>[
            "Mobile"=>"+2547855555" , 
            "Work"=>"+2543445525" , 
            "Cell"=>"+254048989" 
        ]
    )

    "Manager" => array(
        "fullname" => "Alex Okame",
        "email" => "AOkama@yahoo.com",
        "Address"=> "Madaraka"
        "phone" =>[
            "Mobile"=>"+2547855555" , 
            "Work"=>"+2543445525" , 
            "Cell"=>"+254048989" 
        ]
    )

    "Secretary" => array(
        "fullname" => "Alex Okame",
        "email" => "AOkama@yahoo.com",
        "Address"=> "Madaraka"
        "phone" =>[
            "Mobile"=>"+2547855555" , 
            "Work"=>"+2543445525" , 
            "Cell"=>"+254048989" 
        ]
    )
];
print $user_details["secretary"]["phone"]["Work"];

?>
<pre>
 <?php print_r($user_details); ?>
</pre>

<?php
$items = ["book", "pen",456,45.5,"File54"]
?>
<pre>
 <?php var_dump($items); ?>
</pre>
<?php
$age =[45,42,23];

    $user_age = array_combine($user,$age);
    $user_data = array_merge($user,$age);
?>