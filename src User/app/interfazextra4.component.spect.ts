import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { InterfazExtra4Component } from './interfazextra4.component';

describe('InterfazExtra4Component', () => {
  let component: InterfazExtra4Component;
  let fixture: ComponentFixture<InterfazExtra4Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ InterfazExtra4Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(InterfazExtra4Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});