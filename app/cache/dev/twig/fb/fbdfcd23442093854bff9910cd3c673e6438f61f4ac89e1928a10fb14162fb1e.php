<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_012cbc974711f9accb240b0d82f400b31d6a6baf99200f951fe77dfdd83d580a extends Twig_Template
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
        $__internal_cbf805a20dba66257ecafea6037cd448b0bff6a7496903054c86a6f6de567b80 = $this->env->getExtension("native_profiler");
        $__internal_cbf805a20dba66257ecafea6037cd448b0bff6a7496903054c86a6f6de567b80->enter($__internal_cbf805a20dba66257ecafea6037cd448b0bff6a7496903054c86a6f6de567b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cbf805a20dba66257ecafea6037cd448b0bff6a7496903054c86a6f6de567b80->leave($__internal_cbf805a20dba66257ecafea6037cd448b0bff6a7496903054c86a6f6de567b80_prof);

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
