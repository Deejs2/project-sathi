<?php

namespace core;

class Validator {
    private array $errors = [];

    public function validate($data, $rules): array
    {
        foreach ($rules as $field => $rulesArray) {
            $value = $data[$field] ?? null;
            foreach ($rulesArray as $rule) {
                if (is_string($rule)) {
                    $methodName = 'validate' . ucfirst($rule);
                    if (method_exists($this, $methodName)) {
                        $this->{$methodName}($field, $value);
                    }
                } elseif (is_array($rule)) {
                    $methodName = 'validate' . ucfirst($rule[0]);
                    if (method_exists($this, $methodName)) {
                        $this->{$methodName}($field, $value, $rule[1]);
                    }
                }
            }
        }

        return $this->errors;
    }

    private function validateRequired($field, $value) {
        if (empty($value)) {
            $this->errors[$field][] = 'The ' . $field . ' field is required.';
        }
    }

    private function validateEmail($field, $value) {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = 'The ' . $field . ' must be a valid email address.';
        }
    }

    private function validateInteger($field, $value) {
        if (!filter_var($value, FILTER_VALIDATE_INT)) {
            $this->errors[$field][] = 'The ' . $field . ' must be an integer.';
        }
    }

    private function validateFloat($field, $value) {
        if (!filter_var($value, FILTER_VALIDATE_FLOAT)) {
            $this->errors[$field][] = 'The ' . $field . ' must be a float.';
        }
    }

    private function validateMin($field, $value, $min) {
        if (strlen($value) < $min) {
            $this->errors[$field][] = 'The ' . $field . ' must be at least ' . $min . ' characters.';
        }
    }

    private function validateMax($field, $value, $max) {
        if (strlen($value) > $max) {
            $this->errors[$field][] = 'The ' . $field . ' must be less than ' . $max . ' characters.';
        }
    }

    private function validatePassword($field, $value) {
        if (strlen($value) < 8 || !preg_match('/[A-Z]/', $value) || !preg_match('/[a-z]/', $value) || !preg_match('/[0-9]/', $value) || !preg_match('/[\W]/', $value)) {
            $this->errors[$field][] = 'The ' . $field . ' must be at least 8 characters long, contain an uppercase letter, a lowercase letter, a number, and a special character.';
        }
    }

    private function validateDate($field, $value) {
        if (!strtotime($value)) {
            $this->errors[$field][] = 'The ' . $field . ' must be a valid date.';
        }
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }
}
