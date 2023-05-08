import { Component, OnInit } from '@angular/core';
import { ElectionService } from 'src/app/services/election.service';



@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss','./nav-bar.responsive.scss']
})
export class NavbarComponent implements OnInit {
  menuIsOpen: boolean = false
  constructor(
    public router: ElectionService
  ) { }

  ngOnInit(): void {
    
  }

   MenuOpenClose() {
    let menu = document.getElementById("btnMenu")
    if(this.menuIsOpen){
      menu!.style.content = "close";
      this.menuIsOpen = true;
    }
    else{
      menu!.style.content = "menu";
      this.menuIsOpen = false;
    }
  }
}
