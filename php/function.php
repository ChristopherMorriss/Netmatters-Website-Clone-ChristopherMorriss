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
        try { //Currently generates each article three times
            $tests = $db->query("SELECT category, article_image, title, author_description, author, author_image, article_date FROM news_article ORDER BY article_date DESC LIMIT 3");
            $test = $tests->fetch(PDO::FETCH_ASSOC);
            // foreach ($tests as $test){
            //     echo $test['category'];
            //     echo $test['article_image'];
            //     echo "<div class='article-contents'>";
            //     echo "<div class='innards'>";
            //     echo $test['title'];
            //     echo $test['author_description'];
            //     echo "<div class='article-footer'>";
            //     echo $test['author_image'];
            //     echo "<div class ='text-footer'>";
            //     echo $test['author'];
            //     echo $test['article_date'];
            //     echo "</div>";
            //     echo "</div>";
            //     echo "</div>";
            //     echo "</div>";
            // }
            for ($trial = 0; $trial < 3; $trial++) {
                echo $test['category'];
                echo $test['article_image'];
                echo "<div class='article-contents'>";
                echo "<div class='innards'>";
                echo $test['title'];
                echo $test['author_description'];
                echo "<div class='article-footer'>";
                echo $test['author_image'];
                echo "<div class ='text-footer'>";
                echo $test['author'];
                echo $test['article_date'];
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            
        } catch (Exception $e) {
            echo "Unable to retrieve results ";
            exit;
        }
        

        // var_dump($results);
        // var_dump($results->fetchAll(PDO::FETCH_ASSOC));
    }
    function deleteArticles(){
        include "php/connection.php";
        $sql ='DELETE FROM news_article';
        try{
            $results= $db -> prepare($sql);
            $results->execute();
        } catch(exception $e){
            echo "Error! Could not add query to database<br>";
            return false;
        }
    }
?>