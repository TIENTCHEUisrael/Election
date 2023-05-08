import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './components/home/home.component';
import { ElectionComponent } from './components/election/election.component';
import { RegionCreateComponent } from './components/region-create/region-create.component';



const routes: Routes = [ 
  {path: 'home', component: HomeComponent},
  {path: 'election', component: ElectionComponent},
  
  {path: 'region', component: RegionCreateComponent},

  { path: '', redirectTo:'home', pathMatch:'full'},
  {path: '**', component: HomeComponent}
];
@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
