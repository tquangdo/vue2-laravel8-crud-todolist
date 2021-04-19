<template>
  <div class="row todo-content">
    <div class="col-md-6">
      <div class="todo-list not-done">
        <h1>TODOS</h1>
        <div class="input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="Enter content"
            v-model="txt_content"
          />
          <div class="input-group-append">
            <button
              class="btn btn-outline-secondary"
              type="button"
              id="button-addon2"
              @click="onAddTask()"
            >
              Add
            </button>
          </div>
        </div>
        <hr />
        <ul
          class="list-unstyled"
          v-for="(item_todo, item_key) in todo_list"
          :key="item_todo.id"
        >
          <li class="ui-state-default li-items mt-1">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <!-- checked la hien thi luc moi hien ra screen
                  v-model la map voi thao tac check/uncheck (quan trong!!!) -->
                  <input
                    type="checkbox"
                    aria-label="Radio button for following text input"
                    :checked="item_todo.checked"
                    v-model="item_todo.checked"
                  />
                </div>
              </div>
              <input
                type="text"
                class="form-control"
                :class="{ 'done-task': item_todo.done }"
                v-model="item_todo.content"
              />
              <div class="input-group-append remove-icon">
                <span
                  class="input-group-text"
                  @click="onDelTask(item_key, item_todo.content)"
                  >&#10060;</span
                >
              </div>
            </div>
          </li>
        </ul>
        <hr />
        <div class="todo-footer row">
          <div class="col-md-6">
            <div class="form-check form-check-inline" @click="onCheckAll(true)">
              &#9989;
              <label class="form-check-label" for="inlineRadio1"
                >Check all</label
              >
            </div>
            <div
              class="form-check form-check-inline"
              @click="onCheckAll(false)"
            >
              &#10062;
              <label class="form-check-label" for="inlineRadio2"
                >UnCheck all</label
              >
            </div>
          </div>
          <div class="col-md-6 save-all">
            <div class="form-check form-check-inline save-all">
              <button type="button" class="btn btn-success btn-sm">
                DONE ALL &#10004;
              </button>
            </div>
            <div class="form-check form-check-inline save-all">
              <button type="button" class="btn btn-dark btn-sm">
                DEL ALL &#10006;
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "TodoList",
  data() {
    return {
      todo_list: [
        {
          id: 1,
          content: "Noi dung 1",
          checked: false,
          done: true,
        },
        {
          id: 2,
          content: "Noi dung 2",
          checked: true,
          done: false,
        },
      ],
      txt_content: "",
    };
  },

  methods: {
    onAddTask() {
      if (this.txt_content.trim().length === 0) {
        return;
      }
      this.todo_list.push({
        id: this.todo_list.length + 1,
        content: this.txt_content,
        checked: true,
        done: true,
      });
    },
    onDelTask(arg_item_key, arg_item_content) {
      if (confirm("Co chac muon xoa: " + arg_item_content + " ko?")) {
        this.todo_list.splice(arg_item_key, 1);
      }
    },
    onCheckAll(arg_is_checked) {
      this.todo_list.forEach((item_todo_foreach) => {
        item_todo_foreach.checked = arg_is_checked;
      });
    },
  },
};
</script>

<!-- Thêm "scoped" giới hạn CSS bên dưới chỉ áp dụng cho component này -->
<style scoped>
.todo-content {
  display: flex;
  justify-content: center;
}

.todo-list h1 {
  margin-top: 20px;
  padding-bottom: 20px;
  text-align: center;
  font-weight: bold;
}

.todo-footer {
  background-color: #d2e8ca;
  padding: 10px 20px 15px;
}

#done-items li {
  padding: 10px 0;
  border-bottom: 1px solid #ddd;
  text-decoration: line-through;
}

.done-task {
  text-decoration: line-through;
  color: orange;
}

.form-check-inline {
  cursor: pointer;
}

.remove-icon span {
  cursor: pointer;
}

.save-all {
  float: right;
}
</style>