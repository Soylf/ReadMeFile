package readmefileandbd.readmefileandbd.controller;

import lombok.RequiredArgsConstructor;
import org.springframework.web.bind.annotation.*;
import readmefileandbd.readmefileandbd.service.DatabaseService;
import readmefileandbd.readmefileandbd.model.DatabaseModel;

import java.util.List;

@RestController
@RequiredArgsConstructor
@RequestMapping("/database")
public class DatabaseController {
    private final DatabaseService service;

    @PostMapping()
    public void save(@RequestBody DatabaseModel model) {
        service.save(model);
        System.out.printf("Я работаю save");
    }

    @GetMapping
    public List<DatabaseModel> getAll() {
        System.out.printf("Я работаю getall");
        return service.findAll();
    }
}
