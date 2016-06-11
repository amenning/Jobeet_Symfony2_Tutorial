<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f484198884ebabdef6091d5aefc1a1a4a740787291656e8ff245f457d037a9c2 extends Twig_Template
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
        $__internal_0616b537b16845fabaee52e51ec04f718259257f53cf16d7fbb8b7a90f8118a7 = $this->env->getExtension("native_profiler");
        $__internal_0616b537b16845fabaee52e51ec04f718259257f53cf16d7fbb8b7a90f8118a7->enter($__internal_0616b537b16845fabaee52e51ec04f718259257f53cf16d7fbb8b7a90f8118a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0616b537b16845fabaee52e51ec04f718259257f53cf16d7fbb8b7a90f8118a7->leave($__internal_0616b537b16845fabaee52e51ec04f718259257f53cf16d7fbb8b7a90f8118a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
