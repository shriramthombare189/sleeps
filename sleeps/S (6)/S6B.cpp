#include <iostream>
using namespace std;
class Matrix {
private:
    int rows, cols;
    int **data;
public:
    Matrix(int r, int c) : rows(r), cols(c) {
        data = new int*[rows];
        for (int i = 0; i < rows; ++i) {
            data[i] = new int[cols];
        }
    }
    ~Matrix() {
        for (int i = 0; i < rows; ++i) {
            delete[] data[i];
        }
        delete[] data;
    }
    void input() {
        cout << "Enter matrix elements:\n";
        for (int i = 0; i < rows; ++i) {
            for (int j = 0; j < cols; ++j) {
            cin >> data[i][j];
            }
        }
    }
    void display() const {
        cout << "Matrix:\n";
        for (int i = 0; i < rows; ++i) {
            for (int j = 0; j < cols; ++j) {
                cout << data[i][j] << ' ';
            }
            cout << '\n';
        }
    }
    Matrix transpose() const {
        Matrix transposed(cols, rows);
        for (int i = 0; i < rows; ++i) {
            for (int j = 0; j < cols; ++j) {
                transposed.data[j][i] = data[i][j];
            }
        }
        return transposed;
    }
};
int main() {
    int rows, cols;
    cout << "Enter the number of rows and columns for the matrix:\n";
    cin >> rows >> cols;
    Matrix mat(rows, cols);
    mat.input();
    mat.display();
    Matrix transposed = mat.transpose();
    cout << "Transposed matrix:\n";
    transposed.display();
    return 0;
}