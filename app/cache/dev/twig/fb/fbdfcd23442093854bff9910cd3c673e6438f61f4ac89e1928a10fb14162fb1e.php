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
        $__internal_84996925300b8fbae7ce9f5706c196b4a9b379f8b262b51358c57587898c118f = $this->env->getExtension("native_profiler");
        $__internal_84996925300b8fbae7ce9f5706c196b4a9b379f8b262b51358c57587898c118f->enter($__internal_84996925300b8fbae7ce9f5706c196b4a9b379f8b262b51358c57587898c118f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_84996925300b8fbae7ce9f5706c196b4a9b379f8b262b51358c57587898c118f->leave($__internal_84996925300b8fbae7ce9f5706c196b4a9b379f8b262b51358c57587898c118f_prof);

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
