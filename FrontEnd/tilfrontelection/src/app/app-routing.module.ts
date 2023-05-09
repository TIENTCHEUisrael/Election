import { Component, NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { RegionComponent } from './components/Region/Region.component';
import { Edit_regionComponent } from './components/edit_region/edit_region.component';
import { ResultComponent } from './components/result/result.component';

const routes: Routes = [
  { path: 'region_formulaire', component: RegionComponent },
  { path: 'regions/:id', component: Edit_regionComponent },
  { path: '**', component: RegionComponent },
  {path:'resultat',component:ResultComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}
