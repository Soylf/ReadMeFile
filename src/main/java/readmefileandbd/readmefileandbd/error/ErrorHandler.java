package readmefileandbd.readmefileandbd.error;

import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.ExceptionHandler;
import org.springframework.web.bind.annotation.RestControllerAdvice;
import readmefileandbd.readmefileandbd.error.exception.BadRequestException;
import readmefileandbd.readmefileandbd.error.exception.NotFoundException;

@RestControllerAdvice
public class ErrorHandler {
    @ExceptionHandler(BadRequestException.class)
    public ResponseEntity<ApiError> badRequestException(final BadRequestException bre) {
        ApiError apiError = ApiError.builder()
                .status(String.valueOf(HttpStatus.BAD_REQUEST))
                .message(bre.getMessage())
                .build();
        return ResponseEntity.status(HttpStatus.BAD_REQUEST).body(apiError);
    }

    @ExceptionHandler(NotFoundException.class)
    public ResponseEntity<ApiError> notFoundException(final NotFoundException nfe) {
        ApiError apiError = ApiError.builder()
                .status(String.valueOf(HttpStatus.NOT_FOUND))
                .message(nfe.getMessage())
                .build();
        return ResponseEntity.status(HttpStatus.NOT_FOUND).body(apiError);
    }
}