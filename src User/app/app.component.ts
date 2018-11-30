import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {//implements OnInit
  title = 'app';

angular.module('app', [
  '720kb.socialshare'
]);
 
app.config(function(socialshareConfProvider){
   socialshareConfProvider.configure([{
    'provider': 'twitter',
    'conf': {
      'url': 'http://dantecervantes/social-share-con-angular-js',
      'text': 'Social share con angular.js',
      'via': 'dcergo',
      'hashtags': 'angularjs,socialshare,angular-socialshare',
      'trigger': 'click',
      'popupHeight': 800,
      'popupWidth' : 400
    }
  },
  {
    'provider': 'facebook',
    'conf': {
      'url': 'http://dantecervantes/social-share-con-angular-js',
      'trigger': 'mouseover',
      'popupHeight': 800,
      'popupWidth' : 400
    }
  }, //aquí puedes añadir las demás opciones por default de cada red social
  ]);
})
}
