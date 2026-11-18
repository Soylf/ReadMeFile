package readmefileandbd.readmefileandbd.error;

import lombok.Builder;

import java.text.SimpleDateFormat;
import java.util.Date;

@Builder
public class ApiError {
    private String status;
    private String message;
    private final String time = getTime();

    private String getTime() {
        return new SimpleDateFormat("HH:mm:ss dd MMM yyyy").format(new Date());
    }
}
