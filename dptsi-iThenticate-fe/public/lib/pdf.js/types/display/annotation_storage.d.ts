/**
 * Key/value storage for annotation data in forms.
 */
export class AnnotationStorage {
    _storage: Map<any, any>;
    _modified: boolean;
    onSetModified: any;
    onResetModified: any;
    /**
     * Get the value for a given key if it exists
     * or return the default value
     *
     * @public
     * @memberof AnnotationStorage
     * @param {string} key
     * @param {Object} defaultValue
     * @returns {Object}
     */
    public getValue(key: string, defaultValue: Object): Object;
    /**
     * @deprecated
     */
    getOrCreateValue(key: any, defaultValue: any): any;
    /**
     * Set the value for a given key
     *
     * @public
     * @memberof AnnotationStorage
     * @param {string} key
     * @param {Object} value
     */
    public setValue(key: string, value: Object): void;
    getAll(): any;
    get size(): number;
    /**
     * @private
     */
    private _setModified;
    resetModified(): void;
}
