import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { Logros2Component } from './logros2.component';

describe('Logros2Component', () => {
  let component: Logros2Component;
  let fixture: ComponentFixture<Logros2Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Logros2Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(Logros2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
