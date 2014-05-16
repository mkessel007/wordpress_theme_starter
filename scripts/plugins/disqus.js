var disqus_shortname = 'meanstheworld';

function convertToSlug(Text)
    {
        return Text
            .toLowerCase()
            .replace(/[^\w ]+/g,'')
            .replace(/ +/g,'-')
            ;
    }
var disqus = function() {

    var slug = convertToSlug(window.location.pathname);
    var disqus_identifier = slug;
    var disqus_url = window.location.href;
    
    
    var disqus_config = function () { 
      this.language = "en";
    };
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
    
    /* * * Disqus Reset Function * * */
    var resetDisqus = function (newIdentifier, newUrl, newTitle, newLanguage) {
        DISQUS.reset({
            reload: true,
            config: function () {
                this.page.identifier = newIdentifier;
                this.page.url = newUrl;
                this.page.title = newTitle;
                this.language = newLanguage;
            }
        });
    };
    
    
    

}



