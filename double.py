def main(params):
    original_value = params.get('original', 0)
    doubled_value = original_value * 2
    return {'original': original_value, 'doubled': doubled_value}

