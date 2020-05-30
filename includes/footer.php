    <!-- <footer class="footer">
            <span class="text-muted">UwuCraft © 2020 All Rights Reserved <br>Made With Love by Damar !<br>
        </span>
        </footer> -->
            <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; <?= gmdate("Y")?> <?= $website['title']?></p>
        <p>Made by <a href="github.com/damarsimple">Damar Albaribin</a> With LOVE!</p>
        <ul class="list-inline">
        <li class="list-inline-item"><a href="../about/privacy.php">Privacy</a></li>
        <li class="list-inline-item"><a href="../about/terms.php">Terms</a></li>
        <li class="list-inline-item"><a href="../about/support.php">Support</a></li>
        </ul>
        <p><?php echo "Server Execution Time : " . (microtime(true) - $times)?></p>
    </footer>