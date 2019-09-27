/****************************************************************************
** Meta object code from reading C++ file 'menupassangers.h'
**
** Created by: The Qt Meta Object Compiler version 67 (Qt 5.12.3)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "../../Kursova/menupassangers.h"
#include <QtCore/qbytearray.h>
#include <QtCore/qmetatype.h>
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'menupassangers.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 67
#error "This file was generated using the moc from 5.12.3. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
QT_WARNING_PUSH
QT_WARNING_DISABLE_DEPRECATED
struct qt_meta_stringdata_MenuPassangers_t {
    QByteArrayData data[21];
    char stringdata0[285];
};
#define QT_MOC_LITERAL(idx, ofs, len) \
    Q_STATIC_BYTE_ARRAY_DATA_HEADER_INITIALIZER_WITH_OFFSET(len, \
    qptrdiff(offsetof(qt_meta_stringdata_MenuPassangers_t, stringdata0) + ofs \
        - idx * sizeof(QByteArrayData)) \
    )
static const qt_meta_stringdata_MenuPassangers_t qt_meta_stringdata_MenuPassangers = {
    {
QT_MOC_LITERAL(0, 0, 14), // "MenuPassangers"
QT_MOC_LITERAL(1, 15, 11), // "closeWindow"
QT_MOC_LITERAL(2, 27, 0), // ""
QT_MOC_LITERAL(3, 28, 14), // "slotShowAddNew"
QT_MOC_LITERAL(4, 43, 15), // "slotShowShowAll"
QT_MOC_LITERAL(5, 59, 14), // "slotShowDelete"
QT_MOC_LITERAL(6, 74, 12), // "slotShowEdit"
QT_MOC_LITERAL(7, 87, 12), // "slotShowFind"
QT_MOC_LITERAL(8, 100, 10), // "slotGoBack"
QT_MOC_LITERAL(9, 111, 10), // "slotAddNew"
QT_MOC_LITERAL(10, 122, 8), // "slotSave"
QT_MOC_LITERAL(11, 131, 12), // "slotDeleteId"
QT_MOC_LITERAL(12, 144, 17), // "slotDeletePasport"
QT_MOC_LITERAL(13, 162, 12), // "slotEditName"
QT_MOC_LITERAL(14, 175, 15), // "slotEditSurname"
QT_MOC_LITERAL(15, 191, 17), // "slotEditDateBirth"
QT_MOC_LITERAL(16, 209, 15), // "slotEditPasport"
QT_MOC_LITERAL(17, 225, 19), // "slotEditNationality"
QT_MOC_LITERAL(18, 245, 10), // "slotFindId"
QT_MOC_LITERAL(19, 256, 15), // "slotFindPasport"
QT_MOC_LITERAL(20, 272, 12) // "slotFindName"

    },
    "MenuPassangers\0closeWindow\0\0slotShowAddNew\0"
    "slotShowShowAll\0slotShowDelete\0"
    "slotShowEdit\0slotShowFind\0slotGoBack\0"
    "slotAddNew\0slotSave\0slotDeleteId\0"
    "slotDeletePasport\0slotEditName\0"
    "slotEditSurname\0slotEditDateBirth\0"
    "slotEditPasport\0slotEditNationality\0"
    "slotFindId\0slotFindPasport\0slotFindName"
};
#undef QT_MOC_LITERAL

static const uint qt_meta_data_MenuPassangers[] = {

 // content:
       8,       // revision
       0,       // classname
       0,    0, // classinfo
      19,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       1,       // signalCount

 // signals: name, argc, parameters, tag, flags
       1,    0,  109,    2, 0x06 /* Public */,

 // slots: name, argc, parameters, tag, flags
       3,    0,  110,    2, 0x08 /* Private */,
       4,    0,  111,    2, 0x08 /* Private */,
       5,    0,  112,    2, 0x08 /* Private */,
       6,    0,  113,    2, 0x08 /* Private */,
       7,    0,  114,    2, 0x08 /* Private */,
       8,    0,  115,    2, 0x08 /* Private */,
       9,    0,  116,    2, 0x08 /* Private */,
      10,    0,  117,    2, 0x08 /* Private */,
      11,    0,  118,    2, 0x08 /* Private */,
      12,    0,  119,    2, 0x08 /* Private */,
      13,    0,  120,    2, 0x08 /* Private */,
      14,    0,  121,    2, 0x08 /* Private */,
      15,    0,  122,    2, 0x08 /* Private */,
      16,    0,  123,    2, 0x08 /* Private */,
      17,    0,  124,    2, 0x08 /* Private */,
      18,    0,  125,    2, 0x08 /* Private */,
      19,    0,  126,    2, 0x08 /* Private */,
      20,    0,  127,    2, 0x08 /* Private */,

 // signals: parameters
    QMetaType::Void,

 // slots: parameters
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,

       0        // eod
};

void MenuPassangers::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        auto *_t = static_cast<MenuPassangers *>(_o);
        Q_UNUSED(_t)
        switch (_id) {
        case 0: _t->closeWindow(); break;
        case 1: _t->slotShowAddNew(); break;
        case 2: _t->slotShowShowAll(); break;
        case 3: _t->slotShowDelete(); break;
        case 4: _t->slotShowEdit(); break;
        case 5: _t->slotShowFind(); break;
        case 6: _t->slotGoBack(); break;
        case 7: _t->slotAddNew(); break;
        case 8: _t->slotSave(); break;
        case 9: _t->slotDeleteId(); break;
        case 10: _t->slotDeletePasport(); break;
        case 11: _t->slotEditName(); break;
        case 12: _t->slotEditSurname(); break;
        case 13: _t->slotEditDateBirth(); break;
        case 14: _t->slotEditPasport(); break;
        case 15: _t->slotEditNationality(); break;
        case 16: _t->slotFindId(); break;
        case 17: _t->slotFindPasport(); break;
        case 18: _t->slotFindName(); break;
        default: ;
        }
    } else if (_c == QMetaObject::IndexOfMethod) {
        int *result = reinterpret_cast<int *>(_a[0]);
        {
            using _t = void (MenuPassangers::*)();
            if (*reinterpret_cast<_t *>(_a[1]) == static_cast<_t>(&MenuPassangers::closeWindow)) {
                *result = 0;
                return;
            }
        }
    }
    Q_UNUSED(_a);
}

QT_INIT_METAOBJECT const QMetaObject MenuPassangers::staticMetaObject = { {
    &QMainWindow::staticMetaObject,
    qt_meta_stringdata_MenuPassangers.data,
    qt_meta_data_MenuPassangers,
    qt_static_metacall,
    nullptr,
    nullptr
} };


const QMetaObject *MenuPassangers::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->dynamicMetaObject() : &staticMetaObject;
}

void *MenuPassangers::qt_metacast(const char *_clname)
{
    if (!_clname) return nullptr;
    if (!strcmp(_clname, qt_meta_stringdata_MenuPassangers.stringdata0))
        return static_cast<void*>(this);
    return QMainWindow::qt_metacast(_clname);
}

int MenuPassangers::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QMainWindow::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 19)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 19;
    } else if (_c == QMetaObject::RegisterMethodArgumentMetaType) {
        if (_id < 19)
            *reinterpret_cast<int*>(_a[0]) = -1;
        _id -= 19;
    }
    return _id;
}

// SIGNAL 0
void MenuPassangers::closeWindow()
{
    QMetaObject::activate(this, &staticMetaObject, 0, nullptr);
}
QT_WARNING_POP
QT_END_MOC_NAMESPACE
