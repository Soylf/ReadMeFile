package readmefileandbd.readmefileandbd.service;

import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
import readmefileandbd.readmefileandbd.error.exception.NotFoundException;
import readmefileandbd.readmefileandbd.model.DatabaseModel;
import readmefileandbd.readmefileandbd.repository.DatabaseRepository;

import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

@Service
@RequiredArgsConstructor
public class DatabaseServiceImpl implements DatabaseService{
    private final DatabaseRepository repository;

    @Override
    @Transactional
    public void save(DatabaseModel model) {
        try {
            model.setDate(getTime());
            repository.save(model);
        }catch (RuntimeException e) {
            throw new NotFoundException("Что-то пошло не так");
        }
    }

    @Override
    public List<DatabaseModel> findAll() {
        return repository.findAll();
    }


    private String getTime() {
        return new SimpleDateFormat("HH:mm:ss dd MMM yyyy").format(new Date());
    }
}
