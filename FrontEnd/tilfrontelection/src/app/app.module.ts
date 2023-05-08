import { CUSTOM_ELEMENTS_SCHEMA, NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { MainComponent } from './components/main/main.component';
import { FormsModule } from '@angular/forms';
import { ReactiveFormsModule } from '@angular/forms';
import { RegionComponent } from './components/region-module/region/region.component';
import { HttpClientModule } from '@angular/common/http';
import { FormRegionComponent } from './components/region-module/form-region/form-region.component';
import { AddRegionComponent } from './components/region-module/add-region/add-region.component';
import { EditRegionComponent } from './components/region-module/edit-region/edit-region.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    MainComponent,
    RegionComponent,
    FormRegionComponent,
    AddRegionComponent,
    EditRegionComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
