<div id="admob_ad" class="admob"></div>
<script type="text/javascript">
      var admob_vars = {pubid: 'a14da9193f5e7dc',
                        bgcolor: 'FF9119',
                        text: 'FFFFFF',
                        ama: false,
                        test: false,
                        manual_mode: true };
</script>
<script type="text/javascript" src="http://mmv.admob.com/static/iphone/iadmob.js"></script>
<script type="text/javascript">
      var fnFoo = function(){
            var ad = $('#admob_ad',this)[0];
            if (typeof ad != 'undefined') {
                  ad.innerHTML = '';
                 	//request an add we can do this because <script> is called iadmob.js
                  _admob.fetchAd(ad);
                  
            }
            $('div[data-role=page]').die('pageshow', fnFoo);
       };
       $('div[data-role=page]').live('pageshow', fnFoo);
	
</script>	


	
	