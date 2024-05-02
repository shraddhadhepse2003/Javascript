window.googletag = window.googletag || {};
window.googletag.cmd = window.googletag.cmd || [];
(function (W, D, N) {
W[N]=W[N]||{};W[N].cmd=W[N].cmd||[];W[N].cmd2=W[N].cmd2||[];
function getDbg(){var dbg=0,m;try{m = W.location.href.match(/pbjs_debug=(\S*)/) || (D.cookie+';').match(/pbjs_debug=(\S*)\;/);dbg=m && m[1] && 'true'===(m[1].split('&')[0]||'')}catch(e){}dbg=dbg||0;D.cookie='pbjs_debug='+dbg+'; path=/; secure';return dbg}
W.G_options=W.G_options||{};
W.G_options.debug=getDbg();
var G_debug=G_options.debug;
function loadScript(url){var o='script',s=document,a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=url;m.parentNode.insertBefore(a,m);};



if(W[N]['affmp2_cardekho.com']){return}W[N]['affmp2_cardekho.com']=1;
loadScript('https://cdn4-hbs.affinitymatrix.com/hvrlib/cardekho.com/1669614186/v2.js');
W[N].cmd.push(function(){
if(!W[N].chkDomain('cardekho.com')){return}
var cfg = {"aff":{"def":{"maxCall":1,"minVisblePerc":50,"delaySec":30,"kw":{"domain":"cardekho.com"},"gads":{"enabled":false},"szv2":{"enabled":true,"szTp":511,"custSzMap":true},"HBOnly":{"enabled":true,"minCpm":0.01,"version":2}},"aus":[{"au":"/42115163,1089059/IP_cardekho.com_ALL_Multisize_RON_HVR_Both","sz":["300x100","300x250","320x100","320x50","336x280","728x90","970x90"],"def":1},{"au":"/21930596546,1089059/IP_cardekho.com_ALL_Multisize_RON_HVR_Both_MC","sz":["300x100","300x250","320x100","320x50","336x280","728x90","970x90"],"def":1}],"pbjs":{"enabled":true,"nm":"affpbjs","hbsite":"hvr_cardekho.com","cdnEnabled":true}},"pub":{"def":{"sra":1,"maxCall":5,"delaySec":10,"minVisblePerc":60,"reprf":44,"visSec__":5,"mszIgnore":["/1089059/CDWEB_CarNews_728x90_MTF"],"kw":{"domain":"cardekho.com"},"excludePatrn":{"enable":1,"patrn":"NO_REFRESH"},"section":{"enable":0,"whitelist":[],"blacklist":[]},"restoreOrgAttr":[{"name":"data-google-query-id"},{"name":"data-load-initially","value":"affhvr"}],"dfpids":{"enable":1,"excIds":{"cmpId":[3163437345,3256835429,3260007976,3266902245,3283089338,3339178527,3538121912,3213281017,3305676915,3414010980,3420936364,353351631,3535569320],"litId":[6364671062,6361089729,6286128416,6276769675,6386721506,6386367967,6236517810,6237766256,6238340380,6252988496,6238341523,6364301406,6238349995,6238962140,6378750923,6375857709,6378061630,6378064261,6405923187,6405055628,6402177339,6439728869,6697817406]},"incIds":[]},"ignoreEmptyAds":false,"ignireImpForPubAu":1,"selfRefresh":{"enable":true,"arPrtn":["SELF_REFRESH"],"refConfFrmAff":true,"arAu":[],"dfpids":{"incIds":{"advId":[],"cmpId":[],"litId":[]}}}},"rule":[{"tp":"exc","au":["*"],"sz":["1x1"],"lbl":"Ignr 1x1"},{"tp":"inc","au":["*"],"sz":["300x100","300x250","320x100","320x50","336x280","728x90","970x90"],"lbl":"All Au"}],"adspots":[]},"geo":{"enable":false,"srvdrct":true,"cc":["*"]}};
if('function' === typeof W[N].hvrCustCfg ){
    cfg = W[N].hvrCustCfg( cfg );
    if( !cfg ){return}
}
if(cfg.aff.pbjs && cfg.aff.pbjs.enabled){
    var hbsite = cfg.aff.pbjs.hbsite || ('hvr_' + cfg.aff.def.kw.domain),d=new Date(),
    hbInvKey='affhb2_affpbjs_' + cfg.aff.pbjs.hbsite.replace('hvr_man_','hvr_'),
    hostUrl = cfg.aff.pbjs.cdnEnabled ? 'cdn4-hbs.affinitymatrix.com' : 'hbs.ph.affinity.com',
    hbLibUrl = 'https://' + hostUrl +'/v5/' + hbsite + '/affhb.data.js.php?t=' + d.getDate() + d.getMonth() + d.getHours(),
    hbLibLoadDly = 0;

    if(!W[N][hbInvKey]){
        if (hbLibLoadDly > 0) {
            setTimeout(function(){
                W[N].U.loadScript(hbLibUrl);
            }, 0 * 1000);
        } else {
            W[N].U.loadScript(hbLibUrl);
        }
    }
}
if( cfg.aff.def.dfpenblsrv){W[N].U.loadScript("https://securepubads.g.doubleclick.net/tag/js/gpt.js");}

    googletag.cmd.push(function() {
        W[N].AffRefresh(cfg)
    });
});
})(window, document, '__afflib');