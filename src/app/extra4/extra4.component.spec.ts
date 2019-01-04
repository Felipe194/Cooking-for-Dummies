import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { Extra4Component } from './extra4.component';

describe('Extra4Component', () => {
  let component: Extra4Component;
  let fixture: ComponentFixture<Extra4Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Extra4Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(Extra4Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
