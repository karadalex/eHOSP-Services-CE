<style>
#footer_parent {
    background-color: #cccccc;
    text-align: left;
    margin-top: 70px;
    padding-left: 10%;
    position: static;
    width: 100%;
    bottom: 0px;
    left: 0px;
}

#footer_parent:before, #footer_parent:after {
  content: " ";
  display: table;
}

#footer_parent:after {
  clear: both;
}

#footer_parent h6 {
    margin-top: 20px;
}

#footer_parent a {
    box-shadow: none;
    color: black;
}

#footer_parent a:hover {
    background: none;
    color: #0078a0;
}

#ehosp, #connect, #col1, #col2 {
    width: 50%;
    float: left;
}

/************************Mobile Viewport***************************************/
@media only screen and (max-width: 500px) {
    #ehosp, #connect {
        width: 100%;
    }
}

@media only screen and (max-width: 300px) {
    #col1, #col2 {
        width: 100%;
    }
}
</style>

<footer>
    <div id="footer_parent">
        <div id="ehosp">
            <h6>eHOSP</h6>
            <div id="col1">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div id="col2">
                <ul>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="#">Research</a></li>
                    <li><a href="#">References</a></li>
                </ul>
            </div>
        </div>
        <div id="connect">
            <h6>Connect</h6>
            <table>
                <tr>
                    <td>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="#">Twitter</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="#">Facebook</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="#">Google+</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="#">Github</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</footer>
