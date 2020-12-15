<footer>
<!--
    <ul>
    <li>Copyright <?php echo date('Y') ;   ?></li>
        <li>All Rights Reserved</li>
        <li><a href="">Web Design by Yuqiang</a></li>
        <li><a href="">HTML</a></li>
        <li><a href="">CSS</a></li>
    </ul>
-->
    
    <ul>
    <li>Copyright  &copy; <?php 
        $startDate = 2020;
        $currentDate = date('Y');
        if($startDate == $currentDate){
            echo $currentDate;
        }else{
            echo ' '.$startDate.'- '.$currentDate.'';
        }//else
        ?></li>
        <li>All Rights Reserved</li>
        <li><a href="">Web Design by Yuqiang</a></li>
        <li><a href="https://validator.w3.org/check?uri=referer">HTML</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS</a></li>
    </ul>
    
</footer>
</div><!--end wrapper -->
</body>
</html>