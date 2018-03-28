$(document).ready(function(){

        var endDate = "March 30, 2018 20:00:00";
 
        $('.countdown.simple').countdown({ date: endDate });
 
        $('.countdown.styled').countdown({
          date: endDate,
          render: function(data) {
            $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>dias</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>horas</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>minutos</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>segundos</span></div>");

/*if(this.leadingZeros(data.days, 2)=="00" && this.leadingZeros(data.hours, 2)=="00" && this.leadingZeros(data.min, 2)=="00" && this.leadingZeros(data.sec, 2) == "00") {
alert("fim da contagem");
}*/
      }
        });
 
        $('.countdown.callback').countdown({
          date: +(new Date) + 10000,
          render: function(data) {
            $(this.el).text(this.leadingZeros(data.sec, 2) + " sec");
          },
          onEnd: function() {
            $(this.el).addClass('ended');
          }
        }).on("click", function() {
          $(this).removeClass('ended').data('countdown').update(+(new Date) + 10000).start();
        });
 
        // End time for diff purposes
        var endTimeDiff = new Date().getTime() + 15000;
        // This is server's time
        var timeThere = new Date();
        // This is client's time (delayed)
        var timeHere = new Date(timeThere.getTime() - 5434);
        // Get the difference between client time and server time
        var diff_ms = timeHere.getTime() - timeThere.getTime();
        // Get the rounded difference in seconds
        var diff_s = diff_ms / 1000 | 0;
 
        var notice = [];
        notice.push('Server time: ' + timeThere.toDateString() + ' ' + timeThere.toTimeString());
        notice.push('Your time: ' + timeHere.toDateString() + ' ' + timeHere.toTimeString());
        notice.push('Time difference: ' + diff_s + ' seconds (' + diff_ms + ' milliseconds to be precise). Your time is a bit behind.');
 
        $('.offset-notice').html(notice.join('<br />'));
 
        $('.offset-server .countdown').countdown({
          date: endTimeDiff,
          offset: diff_s * 1000,
          onEnd: function() {
            $(this.el).addClass('ended');
          }
        });
 
        $('.offset-client .countdown').countdown({
          date: endTimeDiff,
          onEnd: function() {
            $(this.el).addClass('ended');
          }
        });
 
});