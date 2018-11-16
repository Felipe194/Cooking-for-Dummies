import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';


import {Route, RouterModule} from '@angular/router';
import {HttpClientModule} from '@angular/common/http';

import { PantallaLoginComponent } from './pantalla-login/pantalla-login.component';
import { PantalInicioComponent } from './pantal-inicio/pantal-inicio.component';
import { PlatosComponent } from './platos/platos.component';
import { PlanificadorComponent } from './planificador/planificador.component';


const routes:Route[]=[
  {path:'',component:PantalInicioComponent},
  {path:'login',component:PantallaLoginComponent},
  {path:'platos',component:PlatosComponent}
  {path:'planificador',component:PlanificadorComponent}

];

@NgModule({
  declarations: [
    AppComponent,
    PantallaLoginComponent,
    PantalInicioComponent,
    PlatosComponent,
    PlanificadorComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes),
    HttpClientModule
  ],
  providers: [AppComponent],
  bootstrap: [AppComponent]
})
export class AppModule { }
