import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { RegionComponent } from './components/region-module/region/region.component';
import { AddRegionComponent } from './components/region-module/add-region/add-region.component';


const routes: Routes = [
  //{component:HeaderComponent},
  {path:"regions",component:RegionComponent},
  {path: "add_region", component: AddRegionComponent},
  //{component:FooterComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
