<html class="gr__sandbox-cbt_mercadolibre_com"><head profile="http://gmpg.org/xfn/11">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Asiahub, expand your business to Latin America.</title>
<link rel="shortcut icon" href="//static-cbt.mercadolibre.com/images/favicon-meli.ico" type="image/x-icon">
<link rel="stylesheet" href="http://static-cbt.mercadolibre.com/styles/cbt.min.css">
<link rel="stylesheet" href="css/cbt_merchant.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">

<style type="text/css">
</style>
</head>
<body>
	
    <div class="wrap">
    <div class="ml-header">
        <div class="ml-header-inner">
            <h1><a href="index.html"><img height="35" src="img/logo_transparent.png"></h1></a>
                            <div class="cbt-header-links">
                    <ul>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="http://208.113.130.107:8069/web">Login</a></li>
                        <li><a href="cform.html">Register</a></li>
                    </ul>
                </div>
                    </div>
        
        
    </div>
    <div id="loginModal" class="cbt-hide modalWindow rel">
        <h2 class="f18">Login to your Account</h2>
        
    </div>
    <div class="mask">&nbsp;</div>
<script type="text/javascript">
    var currentPage = 'merchantCreate';
    var siteCurrencyMap = {"US":["USD"],"CN":["USD"],"GB":["GBP"],"DE":["EUR"],"HK":["USD"],"AR":["USD"],"CL":["USD"],"CO":["USD"],"AU":["USD"],"UY":["USD"],"PT":["EUR"]};
    var defaultCurrency = 'USD';
    var restrictedNameWords = [".",",","@","(dot)","(.)",".com","dotcom",".net","dotnet",".cn","dotcn",".hk","dothk",".tw","dottw",".tv","dottv","mercado","meli","dabee",".uk","dotuk",".gb","dotgb",".co.uk","dotcodotuk","'","\"","\/"];
</script>
<style type="text/css">
.loginFrmSection{
    margin-top:40px;
}
</style>
<div id="wrapper">
    <div class="frm loginFrmSection brd-rad">
        <div>
            <h1 class="noMargin">START YOUR STORE</h1>
            <span class="cbt-form-hint">* Mandatory fields</span>
                    </div>
        <div class="frmArea">
            <input type="hidden" value="" id="email_error" name="email_error">
            <input type="hidden" value="" id="name_error" name="name_error">
            <form id="merchantCreateForm" method="POST" class="cbt-form myForm" name="create" action="upload.php">
                <div class="cbt-form-row cbt-form-required">
                    <label for="merchant_name" class="label">Merchant Name:<em>&nbsp;*</em></label>
                    <input type="text" class="inputField small brdrRad" id="merchant_name" required="required" name="merchant_name" maxlength="100">
                </div>

                <div class="cbt-form-row cbt-form-required">
                    <label for="merchant_email" class="label">Email:<em>&nbsp;*</em></label>
                    <input type="text" value="<?php echo($_POST['email']) ?>" class="inputField brdrRad" id="merchant_email" required="required" name="email" onblur="merchantEmailAvailabilityCheck()" maxlength="100">
                </div>
                <div class="cbt-form-row cbt-form-required">
                    <label for="merchant_password" class="label">Password:<em>&nbsp;*</em></label>
                    <input type="password" class="inputField small brdrRad" id="merchant_password" name="password" autocomplete="off">
                    <span class="cbt-form-hint">Choose a password between 6 and 20 characters.</span>
                </div>
                <div class="cbt-form-row cbt-form-required">
                    <label for="merchant_confirm_password" class="label">Confirm Password:<em>&nbsp;*</em></label>
                    <input type="password" class="inputField small brdrRad" id="merchant_confirm_password" name="confirm_password">
                    <span class="cbt-form-hint pass">Passwords should match.</span>
                </div>
                <div class="cbt-form-row cbt-form-required">
                    &nbsp;
                </div>
                
                
                <div class="cbt-form-row cbt-form-required">
                    <label for="merchant_phone" class="label">Phone:<em>&nbsp;*</em></label>
                    <input type="text" class="inputField small brdrRad" id="merchant_phone" required="required" name="phone" maxlength="14">
                    <span class="cbt-popover cbt-bubble cbt-box-icon cbt-box-error cbt-cone valid-phone">
                        <i class="cbt-icon-remove-sign"></i>
                        <span class="cbt-popover-content">Provide Valid Phone number.</span>
                    </span>
                </div>
                
                <div class="cbt-form-row cbt-form-required">
                    <label for="merchant_phone" class="label"></label>
                    <input type="checkbox" id="merchant_terms" required="required" name="terms_conditions">
                    <span id="terms-conditions">I read and agree with  <a href="/us/merchant/cbt-merchant-agreement/" class="anchor" target="_blank">Terms and Conditions</a> for using Asiahub CBT - Asiahub's Cross-Border Trade Platform.</span>
                    <span class="cbt-popover cbt-bubble cbt-box-icon cbt-box-error cbt-cone valid-terms">
                        <i class="cbt-icon-remove-sign"></i>
                        <span class="cbt-popover-content">Please accept the Terms &amp; Conditions.</span>
                    </span>
                </div>
                
                <div class="cbt-form-row cbt-form-required" id="create-submit">
                    <div class="login-btn fl"><input type="submit" class="cbt-btn" value="Register" id="createButton"></div>
                    <div class="fl"><span class="cbt-loading cbt-hide"></span></div>
                    <div class="clear">&nbsp;</div>
                </div>
                <div class="cbt-form-row">
                </div>
            </form>

        </div>
    </div>
    <div class="cbt-popover cbt-bubble cbt-box-icon cbt-box-error cbt-cone" role="alert" id="cbt-merchant-email-exists" aria-hidden="false" data-side="right" data-align="top"><i class="cbt-icon-remove-sign"></i><div class="cbt-popover-content">Email already exists.</div></div>
    <div class="cbt-popover cbt-bubble cbt-box-icon cbt-box-error cbt-cone" role="alert" id="cbt-merchant-name-exists" aria-hidden="false" data-side="right" data-align="top"><i class="cbt-icon-remove-sign"></i><div class="cbt-popover-content">display name already exists.</div></div>
</div>
</div>
<footer class="content-footer">
    <div class="content">

        	<ul class="each-footer-links">
            	<li><a href="http://investor.mercadolibre.com/">Investor Relations</a></li>
            	<li class="last-footer"><a href="/us/merchant/cbt-merchant-agreement/">Terms and Conditions</a></li>
            	<li class="last-footer"><a href="/us/merchant/faqs/">FAQs</a></li>
        	</ul>
            
        	<div class="copyright">
            	<p>Copyright © 2016 Caring Trading and Logistics Limited
            	</p>
        	</div>

    	</div>
	</footer>
	<script type="text/javascript" src="//static-cbt.mercadolibre.com/js/jquery-1.8.0.min.js"></script>
	</body>
</html>