import { Component, Input } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { Region } from 'src/app/models/region.model';
import { RegionService } from 'src/app/services/region.service';

@Component({
  selector: 'app-form-region',
  templateUrl: './form-region.component.html',
  styleUrls: ['./form-region.component.css']
})
export class FormRegionComponent {

  region: Region;
  public success?= "";
  public error?= ""

  public constructor(private service: RegionService, private router: Router) {

  }

  ngOnInit(): void {
    this.region = new Region();
  }

  onRegisterRegion(): void {
    this.service.createRegion(this.region).subscribe((res) => {
      if (res != null) {
        this.success = "Enregistrer avec succes.";
        this.region = new Region();
      }
      else {
        this.error = "Echec d'enregistement!";
      }
    });

  }
}
