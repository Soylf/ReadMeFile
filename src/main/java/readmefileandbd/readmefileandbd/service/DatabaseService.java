package readmefileandbd.readmefileandbd.service;

import readmefileandbd.readmefileandbd.model.DatabaseModel;

import java.util.List;

public interface DatabaseService {
    void save(DatabaseModel model);

    List<DatabaseModel> findAll();
}
