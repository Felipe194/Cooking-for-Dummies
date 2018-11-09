import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MenuTresComidasComponent } from './menu-tres-comidas/menu-tres-comidas.component';
import { MatToolbarModule } from '@angular/material/toolbar';
import {MatButtonToggleModule} from '@angular/material/button-toggle';
import { MatCardModule, MatCardImage } from '@angular/material/card';
import {Component} from '@angular/core';

@NgModule({
  declarations: [
    AppComponent,
    MenuTresComidasComponent
  ],
  imports: [
    BrowserModule,
    MatToolbarModule,
    MatCardModule,
    MatButtonToggleModule
    ],
    providers: [],
    bootstrap: [AppComponent]
    })
export class AppModule {}


