package com.ecommerce.library.dto;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.Getter;
import lombok.NoArgsConstructor;

import javax.validation.constraints.Size;

@Data
@AllArgsConstructor
@NoArgsConstructor
public class CustomerDto {

    @Size(min = 3, max = 15, message = "Имя должно состоять из 3-15 символов")
    private String firstName;

    @Size(min = 3, max = 15, message = "Фамилия должна состоять из 3-15 символов")
    private String lastName;

    private String username;

    @Size(min = 5, max = 20, message = "Пароль должен состоять из 5-20 символов")
    private String password;

    private String repeatPassword;
}
