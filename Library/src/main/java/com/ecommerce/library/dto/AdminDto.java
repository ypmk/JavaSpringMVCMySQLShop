package com.ecommerce.library.dto;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import javax.validation.constraints.Size;

@Data @NoArgsConstructor @AllArgsConstructor
public class AdminDto {
    @Size(min = 3, max = 10, message = "Неверное имя!(3-10 символов)")
    private String firstName;
    @Size(min = 3, max = 10, message = "Неверная фамилия!(3-10 символов)")
    private String lastName;

    private String username;
    @Size(min = 5, max = 15, message = "Неверный пароль!(5-15 символов)")
    private String password;

    private String repeatPassword;
}
