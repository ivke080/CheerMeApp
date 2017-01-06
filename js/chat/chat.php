<div class="mid">
<div class="well rel cetujemo" ng-controller="ChatController">
  
  <div ng-cloak class="chatMessages" ng-repeat="message in messages">
  <em>{{message.from}}: </em>{{message.content}}
  </div><br/>
  <form class="form-inline" ng-submit="addMessage()">
    <div class="formica">
    <input type="text" class="chatInput form-control ran" placeholder="Message..." ng-model="message">
    <button class="tekst5 dugmence2 btn btn-default" type="submit">
      <i class="icon-reply"> Send</i>
    </button>
    </div>
  </form>
  <form action="/#/" method="post" class="skloni_fromu">
        <button class="tekst5 dugmence3 btn btn-default" name = "leave"  type="submit">
      <i class="icon-reply"> Leave</i>
    </button>
    
  </form>
</div>
</div>
