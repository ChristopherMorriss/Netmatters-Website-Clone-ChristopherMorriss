<?php
    include "php/phpenv.php";
    function add_enquiry($name,$company,$telephone,$email,$message,$marketing){
        include "php/connection.php"; //Stops working here
        $sql ='INSERT INTO enquiries(your_name, company, telephone, email, your_message, marketing) VALUES (?,?,?,?,?,?)';
        try{
            $results= $db -> prepare($sql);
            $results->bindValue(1, $name, PDO::PARAM_STR);
            $results->bindValue(2, $company, PDO::PARAM_STR);
            $results->bindValue(3, $telephone, PDO::PARAM_STR);
            $results->bindValue(4, $email, PDO::PARAM_STR);
            $results->bindValue(5, $message, PDO::PARAM_STR);
            $results->bindValue(6, $marketing, PDO::PARAM_INT);
            $results->execute();
            //echo "Should have worked";
        } catch(exception $e){
            echo "Error! Could not add query to database<br>";
            return false;
        }
    }

    // function add_news_article($id,$category,$tag,$image,$title,$description,$read_time,$author,$author_image,$date){
    //     $sql ='INSERT INTO enquiries() VALUES (?,?,?,?,?)';
    // }

    function delete_enquiry(){
        include "php/connection.php";
        $sql ='DELETE FROM enquiries';
        try{
            $results= $db -> prepare($sql);
            $results->execute();
        } catch(exception $e){
            echo "Error! Could not add query to database<br>";
            return false;
        }
    }

    function storeArticle($careers,$image,$title,$description,$author,$authorImage,$date){
        include "php/connection.php";
        $sql ='INSERT INTO news_article(category, article_image, title, author_description, author, author_image, article_date) VALUES (?,?,?,?,?,?,?)';
        try{
            $results= $db -> prepare($sql);
            $results->bindValue(1, $careers, PDO::PARAM_STR);
            $results->bindValue(2, $image, PDO::PARAM_STR);
            $results->bindValue(3, $title, PDO::PARAM_STR);
            $results->bindValue(4, $description, PDO::PARAM_STR);
            $results->bindValue(5, $author, PDO::PARAM_STR);
            $results->bindValue(6, $authorImage, PDO::PARAM_STR);
            $results->bindValue(7, $date, PDO::PARAM_STR);
            $results->execute();
            echo "Should have worked";
        } catch(exception $e){
            echo "Error! Could not add query to database<br>";
            return false;
        }
    }

    function loadArticles(){
        include "php/connection.php";
        try {
            $results = $db->query("category, article_image, title, author_description, author, author_image, article_date FROM news_article");
            //echo "Retrieved Results ";
        } catch (Exception $e) {
            echo "Unable to retrieve results ";
            exit;
        }
        var_dump($results);
        var_dump($results->fetchAll(PDO::FETCH_ASSOC));
    }
?>