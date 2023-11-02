<?php   //getting data from the regestration form in html
     $ REGNO = $_POS M,.T ['REGNO'];
     $ FIRST NAME = $_POST ['FIRST NAME'];
     $ LAST NAME = $_POST ['LAST NAME'];
     $ EMAIL = $_POST ['EMAIL'];
     $ AGE = $_POST ['AGE'];
     $ MALE = $_POST ['MALE'];
     $ FEMALE = $_POST ['FEMALE'];
     $ OTHERS = $_POST ['OTHERS'];
     $ COUNTY = $_POST ['COUNTY'];
     $ COURSE = $_POST ['COURSE'];

     //Database connection 
     $ conn = new mySql('localhost', 'root','', 'connect');

     if( $conn-> connect_error)
         {
             die ('connection failed:' .$conn -> connect-error);
         }
      else 
         {
             $stmt = $conn -> prepare ("insert into TEST ( REGNO,FIRST NAME,LAST NAME,
             EMAIL,AGE,GENDER,COUNTY,COURSE) values (?,?,?,?,?,?,?,?)");

            $stmt->binde_param( "ssssisss",$ REGNO, $ FIRSTNAME, $ LAST NAME, $ EMAIL, $ AGE,
              $ GENDER, $ COUNTY, $ COURSE  ) ;

              $stmt->execute();

              echo "registration successfully,,,,,";

              $stmt->close();
              $conn->close();
         }   