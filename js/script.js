/**
 * Created by firetailor on 06.10.2017.
 */

function refreshCall(){
    $('p#callLower').load('https://henkenius.net/roomq/helper/call');
    var refresher = setTimeout("refreshCall()", 1000);
}