import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MenuTresComidasComponent } from './menu-tres-comidas.component';

describe('MenuTresComidasComponent', () => {
  let component: MenuTresComidasComponent;
  let fixture: ComponentFixture<MenuTresComidasComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MenuTresComidasComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MenuTresComidasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
