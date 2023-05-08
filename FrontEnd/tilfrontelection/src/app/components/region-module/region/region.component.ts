import { AfterViewInit, Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Region } from 'src/app/models/region.model';
import { RegionService } from 'src/app/services/region.service';

@Component({
  selector: 'app-region',
  templateUrl: './region.component.html',
  styleUrls: ['./region.component.css']
})
export class RegionComponent implements OnInit, AfterViewInit {
  
  regions: Region[];

  public constructor(public serviceRegion: RegionService) {

  }

  ngOnInit(): void {
    this.getRegions();
  }

  ngAfterViewInit(): void {
   
  }

  getRegions(): void {
    this.serviceRegion.getRegions().subscribe((regions) => 
    this.regions = regions);
  }

}
