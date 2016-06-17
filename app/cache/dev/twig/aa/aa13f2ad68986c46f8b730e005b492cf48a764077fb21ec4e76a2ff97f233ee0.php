<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5e5dbc2380043d9f40050b32eea33d74d50411137ef4dd4116d4c72c2e7f4ede extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3235ea957a316ebbee6e57a31d9e70b37735642a11a3b8c0a10ace78dbe505ee = $this->env->getExtension("native_profiler");
        $__internal_3235ea957a316ebbee6e57a31d9e70b37735642a11a3b8c0a10ace78dbe505ee->enter($__internal_3235ea957a316ebbee6e57a31d9e70b37735642a11a3b8c0a10ace78dbe505ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3235ea957a316ebbee6e57a31d9e70b37735642a11a3b8c0a10ace78dbe505ee->leave($__internal_3235ea957a316ebbee6e57a31d9e70b37735642a11a3b8c0a10ace78dbe505ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
