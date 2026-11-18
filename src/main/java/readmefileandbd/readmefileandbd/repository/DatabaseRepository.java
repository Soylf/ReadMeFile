package readmefileandbd.readmefileandbd.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import readmefileandbd.readmefileandbd.model.DatabaseModel;

import java.util.List;

public interface DatabaseRepository extends JpaRepository<DatabaseModel, Long> {
}
